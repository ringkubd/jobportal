<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLogdatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logdatas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('employer_id')->nullable();
            $table->integer('jobseeker_id')->nullable();
            $table->string('guest_ip', 200)->nullable();
            $table->string('links', 200)->nullable();
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
        Schema::dropIfExists('logdatas');
    }
}
