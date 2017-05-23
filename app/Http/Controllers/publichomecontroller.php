<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class publichomecontroller extends Controller
{
    public function jobsdescription($id){
	$apply='false';
	$catagories=catagory::all();
	$jobdata = job::
	  		join('empprofiles', 'jobs.employer_id', '=', 'empprofiles.employer_id')
	  		->join('catagories', 'jobs.catagory_id', '=', 'catagories.id')
	  		->join('industrytypes', 'jobs.industrytype_id', '=', 'industrytypes.id')
            ->join('districts', 'jobs.district_id', '=', 'districts.id')
            ->join('divisions', 'jobs.division_id', '=', 'divisions.id')


	  		->select('jobs.*','empprofiles.companyname','empprofiles.companyaddress', 'catagories.catagoryname', 'industrytypes.industrytypename','districts.name as distname','divisions.name as divname')
	  		->where('jobs.id',$id)
	  		->get();
	  		$jobseeker_id=Auth::guard('jobseeker')->user()->id;

          	$check=Applied_job::where('job_id',$id)->where('jobseeker_id',$jobseeker_id)->get();
         	$num_rows=count($check);
         	if($num_rows>0){
	    	$apply='true';
}
	 return view('jobseeker.showjobsbyid',compact('jobdata','catagories','apply'));
      // return $jobdata;

}
}
