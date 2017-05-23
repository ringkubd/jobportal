<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class JobseekerTrigger extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared("
            CREATE TRIGGER jobseekers_default_profile AFTER INSERT ON jobseekers FOR EACH ROW 
            BEGIN 
            INSERT INTO applicationinfos (`jobseeker_id`) VALUES (NEW.id); 
            INSERT INTO personaldetails (`jobseeker_id`) VALUES (NEW.id); 
            INSERT INTO academics (`jobseeker_id`) VALUES (NEW.id); 
            INSERT INTO `js_references` (`jobseeker_id`) VALUES (NEW.id); 
            INSERT INTO specializations (`jobseeker_id`) VALUES (NEW.id); 
            INSERT INTO trainings (`jobseeker_id`) VALUES (NEW.id); 
            INSERT INTO languagepros (`jobseeker_id`) VALUES (NEW.id); 
            INSERT INTO extraactivities (`jobseeker_id`) VALUES (NEW.id); 
            END;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       DB::unprepared('DROP TRIGGER `jobseeker_default_profile`');
    }
}
