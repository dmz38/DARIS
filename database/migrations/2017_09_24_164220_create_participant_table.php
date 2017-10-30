<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParticipantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Participant', function (Blueprint $table) {
            $table->increments('participantId');
            $table->string('fName');
            $table->string('lName');
            $table->boolean('diagnosed');
            $table->date('dob');
            $table->string('gender');
            $table->string('race');
            $table->string('ethnicity');
            $table->string('diagnosis')->nullable($value = true);
            $table->boolean('newRegister');
            $table->boolean('permToShare')->default(false);
            $table->integer('familyId')->nullable($value = true);
            $table->integer('contactId');
            $table->timestamp('registered');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Participant');
    }
}
