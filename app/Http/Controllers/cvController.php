<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\academic;
use App\applicationinfo;
use App\country;
use App\district;
use App\area;
use App\exam_title;
use App\extraactivities;
use App\personaldetails;
use App\reference;
use App\specialization;
use App\training;
use Auth;
use DB;

class cvController extends Controller
{
	public function __construct()
    {
        $this->middleware('jobseeker');
    } 


    public function cv(){
    	$personalDetails =$this->personalDetails();
    	//return dump($personalDetails);
    	$academics = $this->academic();
    	//return dump($academics); 
    	$career = $this->careerAndAppInformation();
    	//return dump($career);	
        $trainings = $this->trainingSummary();
        //return $trainings;
        $extraActivities = $this->extraActivities();
        //return $extraActivities;
    	return view('jobseeker.cv',compact('academics','personalDetails', 'career', 'trainings','extraActivities'));


    }
    private function personalDetails(){
    	$jobseekerId = Auth::guard('jobseeker')->user()->id;
    	$personalDetails = DB::table('personaldetails')
    	->join('jobseekers', 'personaldetails.jobseeker_id', 'jobseekers.id')
    	->select('personaldetails.*', 'jobseekers.name')
    	->where('jobseeker_id', $jobseekerId)->get();
    	return $personalDetails[0];
    }

    private function academic(){
    	$jobseekerId = Auth::guard('jobseeker')->user()->id;
    	$academicDetails = DB::table('academics')
    	->join('exam_titles','academics.exam_title_id','exam_titles.id')
    	->join('groupoormajors','academics.exam_title_id','groupoormajors.id')
    	->select('academics.*', 'exam_titles.name','groupoormajors.groupname')
    	->where('jobseeker_id',$jobseekerId)->get();
    	return $academicDetails;
    }

    private function careerAndAppInformation(){
    	$jobseekerId = Auth::guard('jobseeker')->user()->id;
    	$careerDetails = applicationinfo::where('jobseeker_id', $jobseekerId)->get();
    	return $careerDetails[0];
    }

    private function trainingSummary(){
        $jobseekerId = Auth::guard('jobseeker')->user()->id;
        $training = training::where('jobseeker_id', $jobseekerId)->get();
        return $training;
    }

    private function extraActivities(){
        $jobseekerId = Auth::guard('jobseeker')->user()->id;
        $extraActivities = extraactivities::where('jobseeker_id', $jobseekerId)->get();
        $array = explode(',', $extraActivities[0]->details);
        return $array;
    }
}
