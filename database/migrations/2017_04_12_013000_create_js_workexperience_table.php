<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJsWorkexperienceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('js_workexperience', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('jobseeker_id');
            $table->string('year', 10)->nullable();
            $table->string('position', 50)->nullable();
            $table->text('work_description')->nullable();
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
        Schema::dropIfExists('js_workexperience');
    }
}
