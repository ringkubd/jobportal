<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobseekerContactMeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobseeker_contact_me', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('jobseekerid');
            $table->string('sendername', 255);
            $table->string('senderemail', 255);
            $table->string('Number', 255);
            $table->text('message');
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
        Schema::dropIfExists('jobseeker_contact_me');
    }
}
