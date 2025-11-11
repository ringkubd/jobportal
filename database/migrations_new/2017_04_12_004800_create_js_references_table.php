<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJsReferencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('js_references', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('jobseeker_id')->unsigned()->nullable();
            $table->string('reference_name', 191)->nullable();
            $table->string('organization', 191)->nullable();
            $table->string('disignation', 191)->nullable();
            $table->string('address', 191)->nullable();
            $table->string('office_phone', 191)->nullable();
            $table->string('home_phone', 191)->nullable();
            $table->string('mobile', 191)->nullable();
            $table->string('email', 191)->nullable();
            $table->string('relation', 191)->nullable();
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
        Schema::dropIfExists('js_references');
    }
}
