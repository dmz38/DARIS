<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGuardianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Guardian', function (Blueprint $table) {
            $table->increments('participantId');
            $table->string('fName');
            $table->string('lName');
            $table->integer('familyId');
            $table->integer('contactId');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Guardian');
    }
}
