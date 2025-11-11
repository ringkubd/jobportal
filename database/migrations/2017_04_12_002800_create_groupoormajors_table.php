<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroupoormajorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groupoormajors', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('levelofeducation_id')->unsigned();
            $table->integer('exam_title_id')->unsigned();
            $table->string('groupname', 191);
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
        Schema::dropIfExists('groupoormajors');
    }
}
