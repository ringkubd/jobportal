<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpprofilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empprofiles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('employer_id');
            $table->string('companyname', 191)->default('company');
            $table->string('altcompanyname', 191)->nullable();
            $table->string('contactperson', 191)->nullable();
            $table->string('designation', 191)->nullable();
            $table->string('industrytype', 191)->nullable();
            $table->string('companyaddress', 191)->nullable();
            $table->integer('country')->default(2);
            $table->integer('division')->default(1);
            $table->integer('district')->default(1);
            $table->integer('area')->default(1);
            $table->string('billingaddress', 191)->nullable();
            $table->string('ContactPhone', 191)->nullable();
            $table->string('ContactEmail', 191)->nullable();
            $table->string('websiteaddress', 191)->nullable();
            $table->string('companylogo', 191)->nullable();
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
        Schema::dropIfExists('empprofiles');
    }
}
