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
            $table->integer('employer_id')->unsigned()->index();
            $table->integer('catagory_id')->unsigned();
			$table->integer('industrytype_id')->unsigned();
            $table->integer('division_id')->unsigned();
            $table->integer('district_id')->unsigned();


            $table->string('agerange');
            $table->string('jobtype');
            $table->string('joblevel');
            $table->string('educational_qualification',500);
            $table->string('job_responsibilities',500);
            $table->string('job_experiences_year');
            $table->string('job_experiences_field');
         
            $table->string('salaryrange');
            $table->string('jobtitle');
            $table->integer('vacancies');
            $table->text('instruction'); 
            $table->string('email');
            $table->string('deadline');
            $table->string('contactperson');
            $table->string('designation');
            $table->integer('published')->default(0);
            $table->timestamps();
            $table->foreign('catagory_id')->references('id')->on('catagories')->onDelete('cascade');
            $table->foreign('industrytype_id')->references('id')->on('industrytypes')->onDelete('cascade');
            $table->foreign('employer_id')->references('id')->on('employers')->onDelete('cascade');
            $table->foreign('division_id')->references('id')->on('divisions');
            $table->foreign('district_id')->references('id')->on('districs');
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
