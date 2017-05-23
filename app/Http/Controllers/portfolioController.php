<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use App\jobseeker_contact_me;
class portfolioController extends Controller
{
     public function __construct()
    {
        //$this->middleware('jobseeker');
    } 
    public function index($jid){
    	// $jid=Auth::guard('jobseeker')->user()->id;
    	$js_banner_info=$this->showprimaryinfo($jid);
    	 $js_sociallink=$this->showsociallink($jid);
    	 $aboutme=$this->showaboutus($jid);
    	 $skilldetails=$this->showskill($jid);
    	 $workexperience=$this->showsjobexperience($jid);
    	 $project=$this->showsproject($jid);
    	return view('js_portofolio.inde',compact('js_banner_info','js_sociallink','aboutme','skilldetails','workexperience','project','jid'));
    }

    //show jobseeker information

    private function showprimaryinfo($id){

    	$primaryinfo=DB::table('jobseekers')->join('extraactivities','jobseekers.id','extraactivities.jobseeker_id')->join('personaldetails','jobseekers.id','personaldetails.jobseeker_id')->select('jobseekers.*','personaldetails.*','extraactivities.*')->where('jobseekers.id',$id)->get();
    	return $js_primary_info=count($primaryinfo)>0?$primaryinfo:false;
    }

    private function showsociallink($id){
    	$showlink=DB::table('js_option')->where('jobseeker_id',$id)->where(function ($query) {
                $query->orWhere('option_name','facebook')->orWhere('option_name','linkedin')->orWhere('option_name','twitter')->orWhere('option_name','google-plus');
 })->get();
    	$sociallink=count($showlink)?$showlink:false;
	return $sociallink;

    }

    private function showaboutus($id){

    	$aboutme=DB::table('js_option')->where('jobseeker_id',$id)->where('slug','about_me')->get();
    	$aboutmedetails=count($aboutme)?$aboutme:false;
	return $aboutmedetails;

    }
     private function showskill($id){

    	$skill=DB::table('js_skill')->where('jobseeker_id',$id)->get();
    	$skilldetails=count($skill)?$skill:false;
	return $skilldetails;

    }

    private function showsjobexperience($id){

    	$workexperience=DB::table('js_workexperience')->where('jobseeker_id',$id)->get();
    	$workexperiencedetails=count($workexperience)?$workexperience:false;
	return $workexperiencedetails;

    }

    private function showsproject($id){
    	$project=DB::table('js_projects')->where('jobseeker_id',$id)->get();
    	$projectedetails=count($project)?$project:false;
	return $projectedetails;

    }

    public function contact_me(Request $request)
    {
        return $request->all();
        if ($request->action == "ajax") {
            jobseeker_contact_me::insert(['jobseekerid'=>$request->jobseekerid,'sendername'=>$request->sendername ,'senderemail'=>$request->senderemail ,'Number'=>$request->number ,'message'=>$request->message]);
            return 'Message Send';
        }
    }



}

