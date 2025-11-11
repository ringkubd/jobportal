<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('employer_id')->unsigned()->nullable();
            $table->integer('catagory_id')->unsigned()->nullable();
            $table->integer('industrytype_id')->unsigned()->nullable();
            $table->integer('division_id')->unsigned()->nullable();
            $table->integer('district_id')->unsigned()->nullable();
            $table->string('agerange', 191)->nullable();
            $table->enum('jobtype', ['full-time','part-time','contactual'])->nullable();
            $table->enum('joblevel', ['Entry','Mid','Expert'])->nullable();
            $table->string('educational_qualification', 500)->nullable();
            $table->string('job_responsibilities', 500)->nullable();
            $table->string('job_experiences_year', 191)->nullable();
            $table->string('job_experiences_field', 191)->nullable();
            $table->string('salaryrange', 191)->nullable();
            $table->string('jobtitle', 191)->nullable();
            $table->integer('vacancies')->nullable();
            $table->text('instruction')->nullable();
            $table->string('email', 191)->nullable();
            $table->string('deadline', 191)->nullable();
            $table->string('contactperson', 191)->nullable();
            $table->string('designation', 191)->nullable();
            $table->integer('published')->default(0);
            $table->integer('delete_status')->default(0);
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
        Schema::dropIfExists('jobs');
    }
}
