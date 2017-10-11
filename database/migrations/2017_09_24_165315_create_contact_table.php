<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Contact', function (Blueprint $table) {
            $table->increments('contactId');
            $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->integer('zip');
            $table->string('email');
            $table->integer('phoneType');
            $table->string('phoneNumber');
            $table->string('carrier')->nullable();
            $table->boolean('phonePref')->default(0);
            $table->boolean('emailPref')->default(0);
            $table->boolean('mailPref')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Contact');
    }
}
