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
            $table->integer('jobseeker_id')->unsigned();
            $table->integer('exam_title')->unsigned();
            $table->enum('subject_type',['concentration','major']);
            $table->string('institute');
            $table->string('passing_year');
            $table->string('duration');
            $table->string('achievment');
            $table->timestamps();
            $table->foreign('exam_title')->references('id')->on('exam_titles')->onDelete('cascade');
        });
        
        Schema::table('academics', function (Blueprint $table) {
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
        Schema::dropIfExists('academics');
    }
}
