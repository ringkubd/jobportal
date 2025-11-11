<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicationinfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicationinfos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('jobseeker_id')->unsigned()->nullable();
            $table->string('career_objective', 191)->nullable();
            $table->string('career_summary', 191)->nullable();
            $table->string('special_qualification', 191)->nullable();
            $table->enum('lookingfor', ['entry','mid','top'])->nullable();
            $table->enum('availablefor', ['partime','fulltime'])->nullable();
            $table->string('presentsalary', 191)->nullable();
            $table->string('expectedsalary', 191)->nullable();
            $table->string('preferred_job_category', 191)->nullable();
            $table->string('preferred_district', 191)->nullable();
            $table->string('preferred_division', 191)->nullable();
            $table->string('preferred_organization_type', 191)->nullable();
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
        Schema::dropIfExists('applicationinfos');
    }
}
