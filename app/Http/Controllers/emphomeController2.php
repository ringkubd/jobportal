<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class emphomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('employer');
    } 
    
    public function showhomepage()
    {
    	$ida = Auth::guard('employer')->user()->id;
    	// Total Posted job by employer id
    	$retraive_jobs = DB::table('jobs')->where('employer_id',$ida)->get();
    	$count_job = count($retraive_jobs);

    	// Total Aproved job by employer id

    	$retraive_aproved_jobs=DB::table('jobs')->where('employer_id',$ida)->where('published','1')->get();
    	$count_published_jobs = count($retraive_aproved_jobs);

    	//Total Applied on Your JOb
    	$retrive_total_applied = DB::table('jobs')->where('employer_id',$ida)->join('applied_jobs','applied_jobs.job_id','jobs.id')->select('jobs.*')->get();
    	$count_application = count($retrive_total_applied);

    	return view('employer.emp_homepage',compact('count_job','count_published_jobs','count_application','retrive_total_applied'));
    }
}
