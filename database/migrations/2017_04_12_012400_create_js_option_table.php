<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJsOptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('js_option', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('jobseeker_id');
            $table->string('option_name', 255)->nullable();
            $table->text('option_value')->nullable();
            $table->string('slug', 50)->nullable();
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
        Schema::dropIfExists('js_option');
    }
}
