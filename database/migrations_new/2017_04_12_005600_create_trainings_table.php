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
            $table->integer('jobseeker_id')->unsigned()->nullable();
            $table->string('training_title', 191)->nullable();
            $table->string('topic', 191)->nullable();
            $table->string('institute', 191)->nullable();
            $table->string('country', 191)->nullable();
            $table->string('location', 191)->nullable();
            $table->string('year', 100)->nullable();
            $table->string('duration', 191)->nullable();
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
        Schema::dropIfExists('trainings');
    }
}
