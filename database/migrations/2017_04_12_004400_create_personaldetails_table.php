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
            $table->string('full_name', 150)->nullable();
            $table->string('jobseeker_father_name', 191)->nullable();
            $table->string('jobseeker_mother_name', 191)->nullable();
            $table->string('jobseeker_dob', 100)->nullable();
            $table->enum('jobseeker_gender', ['male','female','other'])->nullable();
            $table->enum('jobseeker_maritalstatus', ['single','married','unmarried'])->nullable();
            $table->string('jobseeker_nationality', 191)->nullable();
            $table->string('jobseeker_national_id_no', 191)->nullable();
            $table->string('jobseeker_religion', 191)->nullable();
            $table->string('jobseeker_permanent_address', 300)->nullable();
            $table->string('jobseeker_current_address', 300)->nullable();
            $table->string('jobseeker_current_location', 191)->nullable();
            $table->string('jobseeker_phone1', 30)->nullable();
            $table->string('jobseeker_phone2', 20)->nullable();
            $table->string('jobseeker_email', 60)->nullable();
            $table->string('jobseeker_email2', 60)->nullable();
            $table->string('profile_img', 200)->nullable();
            $table->timestamps();
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
