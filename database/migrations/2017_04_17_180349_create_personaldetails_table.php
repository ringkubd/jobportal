<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonaldetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personaldetails', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('jobseeker_id')->unsigned();
            $table->string('jobseeker_father_name');
            $table->string('jobseeker_mother_name');
            $table->date('jobseeker_dob');
            $table->enum('jobseeker_gender',['male', 'female','other']);
            $table->tinyInteger('jobseeker_maritalstatus');
            $table->string('jobseeker_nationality');
            $table->string('jobseeker_national_id_no');
            $table->string('jobseeker_religion');
            $table->string('jobseeker_permanent_address',300);
            $table->string('jobseeker_current_address',300);
            $table->string('jobseeker_current_location')->nullable();
            $table->string('jobseeker_phone1',30);
            $table->string('jobseeker_phone2',20)->nullable();
            $table->string('jobseeker_email',60);
            $table->string('jobseeker_email2',60)->nullable();
            $table->timestamps();
        });
        Schema::table('personaldetails', function (Blueprint $table) {
        $table->foreign('jobseeker_id')->references('id')->on('jobseekers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personaldetails');
    }
}
