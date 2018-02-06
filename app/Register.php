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
use phpDocumentor\Reflection\DocBlock\Tags\Param;

error_reporting(E_ALL);
ini_set('display_errors', 'on');

class Register extends App
{
    public static function parseData($input){

        DB::beginTransaction();
        // if single person
        if($input['Nomination'] == "self") {
            // no family needed for an individual

            $values = array_column($input['info'], "value", "name");

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
                "phonePref",
                "textPermission"
                );
            $datasetContact = Register::sub_array($values, $columnNamesContact);
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
                [$values['fName'], $values['lName'], $values['Diagnosed'], $values['dob'],
                    $values['gender'], $values['race'], $values['ethnicity'],
                    $values['previous'], $contactId] );

        } else {
            $familyId = 0;
            $contactId = 0;
            if(isset($input['guardian'])) {
                $values = array_column($input['guardian'], "value", "name");
                $familyId = DB::table("Family")->insertGetId(["familyName" => $values['lName']]);
                if($familyId != 0) {
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
                        "phonePref",
                        "textPermission"
                    );
                    $datasetContact = Register::sub_array($values, $columnNamesContact);
                    $contactId = DB::table('Contact')->insertGetId($datasetContact,'contactId');

                    DB::table('Guardian')->insert(["fName"=>$values['fName'], "lName"=>$values['lName'],
                        "contactId" => $contactId, "familyId" => $familyId]);
                }
            } else {
                DB::rollback();
                return false;
            }
            if(isset($input['children']) && $familyId != 0 && $contactId != 0) {
                foreach($input['children'] as $child) {
                    $values = array_column($child, "value", "name");
                    $values['familyId'] = $familyId;
                    unset($values['otherGender']);
                    $values['contactId'] = $contactId;
                    DB::table('Participant')->insert($values);
                }
            } else {
                DB::rollback();
                return false;
            }
        }

        DB::commit();
    }

    public static function sub_array(array $haystack, array $needle)
    {
        return array_intersect_key($haystack, array_flip($needle));
    }

}