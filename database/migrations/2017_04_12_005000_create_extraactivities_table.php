<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExtraactivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('extraactivities', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('jobseeker_id')->unsigned()->nullable();
            $table->string('extracaruculamname', 100)->nullable();
            $table->string('details', 191)->nullable();
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
        Schema::dropIfExists('extraactivities');
    }
}
