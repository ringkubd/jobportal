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
            $table->integer('jobseeker_id')->unsigned();
            $table->string('career_objective');
            $table->string('career_summary');
            $table->string('special_qualification');
            $table->enum('lookingfor',['entry','mid','top']);
            $table->enum('availablefor',['partime','fulltime']);
            $table->string('presentsalary');
            $table->string('expectedsalary');
            $table->string('preferred_job_category');
            $table->string('preferred_district');
            $table->string('preferred_division');
            $table->string('preferred_organization_type');
            $table->timestamps();
        });

        Schema::table('applicationinfos', function (Blueprint $table) {
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
        Schema::dropIfExists('applicationinfos');
    }
}
