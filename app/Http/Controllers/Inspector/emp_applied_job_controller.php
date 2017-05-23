<?php

namespace App\Http\Controllers\Inspector;

use Illuminate\Http\Request;
use DB;
use App\applied_job;
use App\Http\Controllers\Controller;
class emp_applied_job_controller extends Controller
{
    public function __construct()
    {
        $this->middleware('inspector');
    } 
    
    public function applied_job()
    {
    	$applied_jobs 		= DB::table('applied_jobs')->get();
    	//return count($applied_jobs);
    	//$job_seeker_id 		= $applied_jobs[0]->jobseeker_id;
    	if(count($applied_jobs) == 0){
    		echo "Nai";
    	}else{
    		$job_seeker_id 		= $applied_jobs[0]->jobseeker_id;
    		$connection  = new applied_job;
    		$return =  $connection->join('academics','applied_jobs.jobseeker_id','academics.jobseeker_id')->join('exam_titles','exam_titles.id','academics.exam_title')->join('applicationinfos','applied_jobs.jobseeker_id','applicationinfos.jobseeker_id')->join('extraactivities','extraactivities.jobseeker_id','applied_jobs.jobseeker_id')->join('languagepros','languagepros.jobseeker_id','applied_jobs.jobseeker_id')->join('personaldetails','personaldetails.jobseeker_id','applied_jobs.jobseeker_id')->join('references','references.jobseeker_id','applied_jobs.jobseeker_id')->join('specializations','specializations.jobseeker_id','applied_jobs.jobseeker_id')->join('trainings','trainings.jobseeker_id','applied_jobs.jobseeker_id')->select('applied_jobs.*','academics.exam_title','exam_titles.name','applicationinfos.*','extraactivities.*','languagepros.*','personaldetails.*','references.*','specializations.*','trainings.*')->where('applied_jobs.jobseeker_id',$job_seeker_id)->get();
    		return dump($return);

    		// foreach ($return as $key) {
    		// 	print_r($key->name) ;
    		// };
    	}
    	//$job_seeker_info	= DB::
    }
}
