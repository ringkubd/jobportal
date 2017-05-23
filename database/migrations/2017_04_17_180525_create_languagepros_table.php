<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLanguageprosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('languagepros', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('jobseeker_id')->unsigned();
             
            $table->enum('jobseeker_language', ['english', 'bangla','others']);
            $table->enum('jobseeker_reading', ['good','medium']);
            $table->enum('jobseeker_writing', ['good','medium']);    
            $table->enum('jobseeker_speaking',['good','medium']);
            $table->timestamps();
        });

        Schema::table('languagepros', function (Blueprint $table) {
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
        Schema::dropIfExists('languagepros');
    }
}
