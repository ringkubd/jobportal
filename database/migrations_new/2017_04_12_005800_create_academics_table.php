<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcademicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('academics', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('jobseeker_id')->unsigned()->nullable();
            $table->integer('lavelofeducation_id')->unsigned()->nullable();
            $table->integer('groupormajor_id')->unsigned()->nullable();
            $table->integer('exam_title_id')->unsigned()->nullable();
            $table->string('result', 191)->nullable();
            $table->string('marks', 191)->nullable();
            $table->string('institute', 191)->nullable();
            $table->string('passing_year', 191)->nullable();
            $table->string('duration', 191)->nullable();
            $table->string('achievment', 191)->nullable();
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
        Schema::dropIfExists('academics');
    }
}
