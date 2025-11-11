<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJsProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('js_projects', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('jobseeker_id');
            $table->string('projictimage', 50)->nullable();
            $table->string('projecttitle', 50)->nullable();
            $table->string('projecturl', 200);
            $table->text('project_description')->nullable();
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
        Schema::dropIfExists('js_projects');
    }
}
