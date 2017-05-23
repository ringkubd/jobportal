<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\catagory;
use App\job;
use App\industrytype;
use Illuminate\supports\FACADES\storage;
use Auth;
use DB;
use App\country;
use App\division;
use App\district;
use Illuminate\Support\Facades\Session;
class jobController extends Controller
{
	public function __construct()
    {
        $this->middleware('employer');
    } 

    
     public function getjobsinfo(){

	   	$cat=catagory::pluck('catagoryname','id');
       	$industry=industrytype::pluck('industrytypename','id');
       	$ida = Auth::guard('employer')->user()->id;
		$job = DB::table('jobs')->where('employer_id',$ida)->paginate(2);
		
		// get countries
		$division = DB::table('divisions')->pluck('name','id');

		$applied2 = array();
		foreach ($job as $j) {
		$applied2[$j->id]= $this->count_apply_particular_job($j->id);
		}


       return view('employer.job',compact('applied2','cat','industry','job','division'));

	}
	// Count Total apply on particular job

	private function count_apply_particular_job($job_id)
	{
		$applied_on_job = DB::table('applied_jobs')->where('job_id',$job_id)->get();
		return count($applied_on_job);
	}







	/*
		+++++++++++++++
			POST JOB
		+++++++++++++++
	*/
	public function post_job(Request $data)
	{
		//return $data;
		$ida = Auth::guard('employer')->user()->id;
		$job = new job;
		$job->employer_id=$ida;
		$job->catagory_id=$data->catagory_id;
		$job->industrytype_id=$data->industrytype_id;
		$job->salaryrange=$data->salaryrange;
		$job->jobtitle = $data->jobtitle;
		$job->vacancies=$data->vacancies;
		$job->instruction=$data->instruction;
		$job->email=$data->email;
		$job->deadline=$data->deadline;
		$job->contactperson=$data->contactperson;
		$job->designation=$data->designation;
		
		$job->division_id=$data->division;
		$job->district_id=$data->districts;
		$job->agerange=$data->agerange;
		$job->jobtype=$data->jobtype;
		$job->joblevel=$data->joblevel;
		$job->educational_qualification=$data->educational_qualification;
		$job->job_responsibilities=$data->job_responsibilities;
		$job->job_experiences_year=$data->job_experiences_year;
		$job->job_experiences_field=$data->job_experiences_field;
		
		$job->save();

	 	//job::create();
	}

	/*
	##########################
		Show Job on 
		Employer
	  	DashBoard
  	##########################
	*/
	  	public function show_job_on_emp_dashboard()
	  	{
	  		$ida = Auth::guard('employer')->user()->id;
	  		$jobs = DB::table('jobs')->where('employer_id',$ida)->paginate(2);
	  		$job = $jobs;

	  		if(count($job))
	  		{
	  			return view('employer.job',compact('job'));
	  		}else{
	  			$job = ['message'=>'no data found'];
	  			return view('employer.job',compact('job'));
	  		}
	  		
	  	}

	  	/*
	##########################
		Edit Job on 
			Employer
	  	DashBoard
  	##########################
	*/
	  	public function edit_job_employer_dashboard(Request $data)
	  	{
	  		//return $data;
	  		$jobid = $data->edit_post_id;
			$ida = Auth::guard('employer')->user()->id;
			$jobs = job::where('id',$jobid)->get();
			$job = $jobs[0];
			//return $job;
			$job->employer_id=$ida;
			$job->catagory_id=$data->catagory_id;
			$job->industrytype_id=$data->industrytype_id;
			$job->salaryrange=$data->salaryrange;
			$job->jobtitle = $data->jobtitle;
			$job->vacancies=$data->vacancies;
			$job->instruction=$data->instruction;
			$job->email=$data->email;
			$job->deadline=$data->deadline;
			$job->contactperson=$data->contactperson;
			$job->designation=$data->designation;

			$job->division_id=$data->division;
			$job->district_id=$data->districts;
			$job->agerange=$data->agerange;
			$job->jobtype=$data->jobtype;
			$job->joblevel=$data->joblevel;
			$job->educational_qualification=$data->educational_qualification;
			$job->job_responsibilities=$data->job_responsibilities;
			$job->job_experiences_year=$data->job_experiences_year;
			$job->job_experiences_field=$data->job_experiences_field;
			$job->save();
			session()->flash('status', 'successfully updated');
			
			

	  	}

	  	public function job_edit(Request $r){
	  		$ida = Auth::guard('employer')->user()->id;
	  		$job_id = $r->jobid;
	  		$connection = new job;
	  		$job_data = $connection->find($job_id);
	  		return $job_data;

	  	}


	  	/*
	##########################
		Delete Job on 
			Employer
	  	DashBoard
  	##########################
	*/
	  	public function delte_job_employer_dashboard(Request $data)
	  	{
	  		$data->job_id;
	  		job::destroy($data->job_id);
	  		return ('Successfully deleted');
	  		
	  	}


	  	//show jobdetails on employer dashboard by tariqul 

	  		public function showJobDetails(Request $data){

				$id = $data->job_id;

				$jobdata = DB::table('jobs')->join('empprofiles', 'jobs.employer_id','empprofiles.employer_id')
				->join('catagories', 'jobs.catagory_id','catagories.id')
				->join('industrytypes', 'jobs.industrytype_id', 'industrytypes.id')
				->select('jobs.*','empprofiles.companyname','empprofiles.companyaddress', 'catagories.catagoryname', 'industrytypes.industrytypename')
				->where('jobs.id',$id)
				->get();

				return $jobdata;


			}


			///return district on form on change

			public function return_district_by_division_id(Request $Request)
			{
				if(isset($Request->action ) && $Request->action == 'ajax') {
						$division = $Request->division_id;
						$districts = DB::table('districts')->where('division_id',$division)->get();
						return response()->json($districts);
					}else{
						return $message = 'You dont have to right to access this page';
					}
				
			}


}
