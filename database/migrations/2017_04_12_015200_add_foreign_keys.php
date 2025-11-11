<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('divisions', function (Blueprint $table) {
            $table->foreign('country_id')->references('id')->on('countries');
        });

        Schema::table('districts', function (Blueprint $table) {
            $table->foreign('country_id')->references('id')->on('countries');
        });

        Schema::table('exam_titles', function (Blueprint $table) {
            $table->foreign('levelofeducation_id')->references('id')->on('levelofeducations');
        });

        Schema::table('groupoormajors', function (Blueprint $table) {
            $table->foreign('exam_title_id')->references('id')->on('exam_titles');
        });

        Schema::table('personaldetails', function (Blueprint $table) {
            $table->foreign('jobseeker_id')->references('id')->on('jobseekers')->onDelete('cascade');
        });

        Schema::table('languagepros', function (Blueprint $table) {
            $table->foreign('jobseeker_id')->references('id')->on('jobseekers')->onDelete('cascade');
        });

        Schema::table('js_references', function (Blueprint $table) {
            $table->foreign('jobseeker_id')->references('id')->on('jobseekers')->onDelete('cascade');
        });

        Schema::table('extraactivities', function (Blueprint $table) {
            $table->foreign('jobseeker_id')->references('id')->on('jobseekers')->onDelete('cascade');
        });

        Schema::table('specializations', function (Blueprint $table) {
            $table->foreign('jobseeker_id')->references('id')->on('jobseekers')->onDelete('cascade');
        });

        Schema::table('applicationinfos', function (Blueprint $table) {
            $table->foreign('jobseeker_id')->references('id')->on('jobseekers')->onDelete('cascade');
        });

        Schema::table('trainings', function (Blueprint $table) {
            $table->foreign('jobseeker_id')->references('id')->on('jobseekers')->onDelete('cascade');
        });

        Schema::table('academics', function (Blueprint $table) {
            $table->foreign('exam_title_id')->references('id')->on('exam_titles')->onDelete('cascade');
        });

        Schema::table('jobs', function (Blueprint $table) {
            $table->foreign('catagory_id')->references('id')->on('catagories')->onDelete('cascade');
        });

        Schema::table('applied_jobs', function (Blueprint $table) {
            $table->foreign('employer_id')->references('id')->on('employers');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('divisions', function (Blueprint $table) {
            $table->dropForeign(['country_id']);
        });

        Schema::table('districts', function (Blueprint $table) {
            $table->dropForeign(['country_id']);
        });

        Schema::table('exam_titles', function (Blueprint $table) {
            $table->dropForeign(['levelofeducation_id']);
        });

        Schema::table('groupoormajors', function (Blueprint $table) {
            $table->dropForeign(['exam_title_id']);
        });

        Schema::table('personaldetails', function (Blueprint $table) {
            $table->dropForeign(['jobseeker_id']);
        });

        Schema::table('languagepros', function (Blueprint $table) {
            $table->dropForeign(['jobseeker_id']);
        });

        Schema::table('js_references', function (Blueprint $table) {
            $table->dropForeign(['jobseeker_id']);
        });

        Schema::table('extraactivities', function (Blueprint $table) {
            $table->dropForeign(['jobseeker_id']);
        });

        Schema::table('specializations', function (Blueprint $table) {
            $table->dropForeign(['jobseeker_id']);
        });

        Schema::table('applicationinfos', function (Blueprint $table) {
            $table->dropForeign(['jobseeker_id']);
        });

        Schema::table('trainings', function (Blueprint $table) {
            $table->dropForeign(['jobseeker_id']);
        });

        Schema::table('academics', function (Blueprint $table) {
            $table->dropForeign(['exam_title_id']);
        });

        Schema::table('jobs', function (Blueprint $table) {
            $table->dropForeign(['catagory_id']);
        });

        Schema::table('applied_jobs', function (Blueprint $table) {
            $table->dropForeign(['employer_id']);
        });

    }
}
