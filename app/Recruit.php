<?php
/**
 * Created by PhpStorm.
 * User: dmzie
 * Date: 10/11/2017
 * Time: 7:31 PM
 */

namespace App;
use DB;
use Illuminate\Support\Facades\App;

error_reporting(E_ALL);
ini_set('display_errors', 'on');

class Recruit extends App
{
    public static function parseData($input){
        /*
         * suggestCheck: "on",
         * Nomination: "self",
         * Diagnosed: "1",
         * singleDiagnosis: "None",
         * otherDiagInput: "",
         * Diagnosed:"1"
         * Nomination : "self"
         * address1 :  "148 Forest Trail Drive"
         * address2 : ""
         * city : "Lansdale"
         * email : ""
         * emailPermission : "1"
         * emailPref : "0"
         * fName : "Dan"
         * lName : "Ziegler"
         * mailPermission : "1"
         * otherDiagInput : ""
         * otherGender : ""
         * phoneNumber : "2153532531"
         * phonePref : "1"
         * phoneType : "cell"
         * previous : "on"
         * singleDiagnosis : "None"
         * state : "“PA”"
         * suggestCheck : "on"
         * textPermission : "1"
         * voicemailPermission : "1"
         * zip : "19446"
         */

        // TODO: Remove before hitting production
        //DB::connection()->enableQueryLog();
        DB::beginTransaction();
        // if single person
        if($input['Nomination'] == "self") {
            // no family needed for an individual

            // Create Contact row
            $columnNamesContact = array(
                "address",
                "address2",
                "city",
                "state",
                "zip",
                "phoneType",
                "phoneNumber",
                "carrier",
                "email",
                "emailPermission",
                "emailPref",
                "mailPermission",
                "mailPref",
                "voicemailPermission",
                "phonePref"
                );
            $datasetContact = Recruit::sub_array($input, $columnNamesContact);
            $contactId = DB::table('Contact')->insertGetId($datasetContact,'contactId');

            // Create Participant row
            $columnNamesParticipant = array(
                "fName",
                "lName",
                "Diagnosed",
                "dob",
                "gender",
                "race",
                "ethnicity",
                "diagnosis",
                "previous"
            );
            //$datasetContact = Recruit::sub_array($input, $columnNamesParticipant);
            $datasetContact["contactId"] = $contactId;

            $dob = strtotime($input['dob']);
            $input['dob'] = date('Y-m-d', $dob);

            DB::insert("INSERT INTO Participant 
              (fName,
                lName,
                diagnosed,
                dob,
                gender,
                race,
                ethnicity,
                newRegister,
                contactId)
                
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)",
                [$input['fName'], $input['lName'], $input['Diagnosed'], $input['dob'],
                    $input['gender'], $input['race'], $input['ethnicity'],
                    $input['previous'], $contactId] );

        } else {

        }

        DB::commit();

        //return DB::getQueryLog();
    }

    public static function sub_array(array $haystack, array $needle)
    {
        return array_intersect_key($haystack, array_flip($needle));
    }

}