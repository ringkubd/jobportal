<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrainingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trainings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('jobseeker_id')->unsigned();
            $table->string('training_title');
              $table->string('topic');
              $table->string('institute');
              $table->string('country');
              $table->string('location');
              $table->date('year');
              $table->string('duration');
              $table->timestamps();
        });
        
        Schema::table('trainings', function (Blueprint $table) {
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
        Schema::dropIfExists('trainings');
    }
}
