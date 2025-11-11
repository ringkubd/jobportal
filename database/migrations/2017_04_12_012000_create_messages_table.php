<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('jobseeker_sender_id')->nullable();
            $table->integer('employer_sender_id')->nullable();
            $table->integer('jobseeker_recepent_id')->nullable();
            $table->integer('employer_recepent_id')->nullable();
            $table->integer('parent_message_id')->nullable();
            $table->string('subject', 200);
            $table->string('messages', 1000);
            $table->integer('read_status')->default(0);
            $table->integer('trash')->default(0);
            $table->integer('draft')->default(0);
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
        Schema::dropIfExists('messages');
    }
}
