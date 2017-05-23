<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\job;
use App\catagory;
use App\Applied_job;
use Auth;
use App\block;
use App\follower;
use DB;
use Session;

class alljobsController extends Controller
{
	public function __construct()
    {
        $this->middleware('jobseeker');
    } 


	public function index(){
		$ida = Auth::guard('jobseeker')->user()->id;

		// total apllied on specific user
		$totalApplied = $this->totalApplied($ida);
		return view('jobseeker.home',compact('totalApplied'));
	}


##########Show All Jobs#########


   public function showalljobs(){
   	 $catagories=catagory::all();
   	$jobseeker_id=Auth::guard('jobseeker')->user()->id;
   	        $blockcheck=block::where('jobseeker_id',$jobseeker_id)->pluck('employer_id');
   	        $followcheck=follower::where('jobseeker_id',$jobseeker_id)->get();
   	        $fl='';
   	        foreach($followcheck as $f){
   	        	$fl=$f->employer_id;
   	        }
   	       if(count($blockcheck)>0 && count($followcheck)>0){
	  		$job=job::where('published',1)->whereNotIn('employer_id',$blockcheck)->orderByRaw('employer_id in('.$fl.') desc, id desc')->paginate(2);
	  
	  		if(count($job))

	  		{
	  			
	  			return view('jobseeker.job',compact('job','catagories'));
	  		}else{
	  			$message ='no data found';
	  			return view('jobseeker.job',compact('message','catagories'));
	  		}
	  	}
	  	else if(count($blockcheck)>0){
	  		$job=job::where('published',1)->whereNotIn('employer_id',$blockcheck)->orderBy('id','desc')->paginate(2);
	  
	  		if(count($job))
	  		{
	  			
	  			return view('jobseeker.job',compact('job','catagories'));
	  		}else{
	  			$message ='no data found';
	  			return view('jobseeker.job',compact('message','catagories'));
	  		}
	  	}
	  	else if(count($followcheck)>0){
	  		$job=job::where('published',1)->orderByRaw('employer_id in ('.$fl.')desc, id desc')->paginate(2);
	  
	  		if(count($job))

	  		{
	  			
	  			return view('jobseeker.job',compact('job','catagories'));
	  		}else{
	  			$message ='no data found';
	  			return view('jobseeker.job',compact('message','catagories'));
	  		}
	  	}
	  	else{

           $job=job::where('published',1)->orderBy('id','desc')->paginate(2);
           if(count($job))

	  		{
	  			
	  			return view('jobseeker.job',compact('job','catagories'));
	  		}else{
	  			$message ='no data found';
	  			return view('jobseeker.job',compact('message','catagories'));
	  		}

	  	}
	  	}

public function show($id){
	$catagories=catagory::all();
		$jobseeker_id=Auth::guard('jobseeker')->user()->id;
   	        $blockcheck=block::where('jobseeker_id',$jobseeker_id)->pluck('employer_id');
   	       if(count($blockcheck)>0){
	  		//$job=job::where('published',1)->whereNotIn('employer_id',$blockcheck)->paginate(2);
	         $catjobs=job::where('catagory_id',$id)->where('published',1)->whereNotIn('employer_id',$blockcheck)->paginate(2);
              return view('jobseeker.showjobsbycat',compact('catjobs','catagories'));

           }
           else{


	$catjobs=job::where('catagory_id',$id)->where('published',1)->paginate(2);
	return view('jobseeker.showjobsbycat',compact('catjobs','catagories'));
	}
}


    public function jobsdescription($id){
    $apply='false';
    $catid=DB::table('jobs')->where('jobs.id',$id)->pluck('catagory_id');
    //return $catid;
   $relatedJobs=DB::table('jobs')->where('jobs.catagory_id',$catid)->where('jobs.id','!=',$id)->join('empprofiles', 'jobs.employer_id', '=', 'empprofiles.employer_id') ->join('divisions', 'jobs.division_id', '=', 'divisions.id')->select('jobs.*','divisions.name as divname','empprofiles.companylogo as clogo')->
take(10)->orderByRaw("Rand()")->get();

    $catagories=catagory::all();
    $jobdata = job::
            join('empprofiles', 'jobs.employer_id', '=', 'empprofiles.employer_id')
            ->join('catagories', 'jobs.catagory_id', '=', 'catagories.id')
            ->join('industrytypes', 'jobs.industrytype_id', '=', 'industrytypes.id')
            ->join('districts', 'jobs.district_id', '=', 'districts.id')
            ->join('divisions', 'jobs.division_id', '=', 'divisions.id')


            ->select('jobs.*','empprofiles.companyname','empprofiles.companylogo','empprofiles.companyaddress', 'catagories.catagoryname', 'industrytypes.industrytypename','districts.name as distname','divisions.name as divname')
            ->where('jobs.id',$id)
            ->get();
            if (Auth::guard('jobseeker')->check()) {
                $jobseeker_id=Auth::guard('jobseeker')->user()->id;

            $check=Applied_job::where('job_id',$id)->where('jobseeker_id',$jobseeker_id)->get();
            $num_rows=count($check);
            if($num_rows>0){
            $apply='true';
            }
            
}
	 return view('jobseeker.showjobsbyid',compact('jobdata','catagories','apply','relatedJobs'));
      // return $jobdata;

}
public function applyjob(Request $data){
$jobseeker_id=Auth::guard('jobseeker')->user()->id;
$check=Applied_job::where('job_id',$data->jobid)->where('jobseeker_id',$jobseeker_id)->get();
 $num_rows=count($check);
if($num_rows>0){
	Session::flash('applied', 'You are allready applied for this job.');
	return redirect(url('jobseeker/alljobsshow/'.$data->jobid));
}
else{
$employerId = DB::table('jobs')->where('id',$data->jobid)->select('employer_id')->get();
//return $employerId[0]->employer_id;
Applied_job::create(['job_id'=>$data->jobid,'jobseeker_id'=>$jobseeker_id,'employer_id'=>$employerId[0]->employer_id,'expected_salary'=>$data->expected_sallary]);
Session::flash('applied', 'You are succesfully applied');
return redirect(url('jobseeker/managejobs'));
}
}


// Specific jobseeker statastics

	private function totalApplied($id)
	{
		$applied = DB::table('applied_jobs')->where('jobseeker_id',$id)->get();
		return $totalApplied = count($applied);
	}



}
