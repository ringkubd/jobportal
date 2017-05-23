<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('slug');
            $table->rememberToken();
            $table->timestamps();
        });
         //Schema::unprepared('DELIMITER $$ CREATE TRIGGER employer_default_profile AFTER INSERT ON employers FOR EACH ROW BEGIN INSERT INTO empprofiles (`employer_id`) VALUES (NEW.id); END$$');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('employers');
        //Schema::unprepared('DROP TRIGGER `employer_default_profile`');
    }
}
