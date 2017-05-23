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
            $table->string('companyname')->nullable();
            $table->string('altcompanyname')->nullable();
            $table->string('contactperson')->nullable();
            $table->string('designation')->nullable();
            $table->string('industrytype')->nullable();
            $table->string('companyaddress')->nullable();
            $table->integer('country')->nullable()->default(1);
            $table->integer('division')->nullable()->default(1);
            $table->integer('district')->nullable()->default(1);
            $table->integer('area')->nullable()->default(1);
            $table->string('billingaddress')->nullable();
            $table->string('ContactPhone')->nullable();
            $table->string('ContactEmail')->nullable();
            $table->string('websiteaddress')->nullable();
            $table->string('companylogo')->nullable();
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
