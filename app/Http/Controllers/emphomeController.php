<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\personaldetails;
use App\academic;
use App\applicationinfo;
use App\Employer;

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
    	$retrive_total_applied = DB::table('applied_jobs')->where('employer_id',$ida)->get();

		$retrive_total_applied_infos = DB::table('applied_jobs')
			->where('applied_jobs.employer_id',$ida)
			->join('jobs','jobs.id','applied_jobs.job_id')
			->join('personaldetails','personaldetails.jobseeker_id','applied_jobs.jobseeker_id')
			->select('jobs.*','applied_jobs.jobseeker_id','personaldetails.*')->get();
		//dd($retrive_total_applied_infos);
    	$count_application = count($retrive_total_applied);
    	 $user = new Employer;
       	$count_total_online = $user->allOnline()->count();

    	return view('employer.emp_homepage',compact('count_job','count_total_online','count_published_jobs','count_application','retrive_total_applied','retrive_total_applied_infos'));
    }
	/*
	
	
	public function applicantcv($id){
		$personaldetail = personaldetails::where('jobseeker_id',$id)->get();
		$academicsdata = $this->getacademic($id);
		$get_training=$this->get_training_info($id);
		$get_refference = $this->get_refference_info($id);
		$item = applicationinfo::where('jobseeker_id',$id)->get();

        if (count($item)>0) {
            $items=$item;
        }
		
		if (count($personaldetail)>0) {
            $personaldetails=$personaldetail[0];
        }
		if (count($academicsdata)>0){
            $levelNames =[];
            foreach($academicsdata as $acadata) {
                $levelNames[$acadata->lavelofeducation_id] = $this->getLevelName($acadata->lavelofeducation_id);
            }

        }


        if (count($academicsdata)>0 && isset($academicsdata[0]->exam_title_id)) {
            $examtitlename =[];
            foreach($academicsdata as $acadata) {
                $examtitlename[$acadata->exam_title_id] = $this->getexamName($acadata->exam_title_id);
            }
  
        }

        if (count($academicsdata)>0 && isset($academicsdata[0]->groupormajor_id)) {
            $majorename =[];
            foreach($academicsdata as $acadata) {
                $majorename[$acadata->groupormajor_id] = $this->getmajorname($acadata->groupormajor_id);
            }

  
       }
		return view('employer.applicantcv',compact('personaldetails','academicsdata','get_training','get_refference','items'));
	}
	*/
	public function applicant_list(Request $id){
		//return $id->id;
		
		$ida = Auth::guard('employer')->user()->id;
		$retraive_aproved_jobs_infos=DB::table('jobs')->where('jobs.employer_id',$ida)->where('published','1')->select('jobs.id','jobs.jobtitle')->get();
		
		$retrive_total_applied_infos = DB::table('jobs')
			->where('jobs.employer_id',$ida)->where('applied_jobs.short_list',0)
			->join('applied_jobs','applied_jobs.job_id','jobs.id')
			->join('personaldetails','personaldetails.jobseeker_id','applied_jobs.jobseeker_id')
			->select('jobs.*','applied_jobs.*','personaldetails.*')->get();
			
			$retrive_total_shortlisted_applicants = DB::table('jobs')
			->where('jobs.employer_id',$ida)->where('applied_jobs.short_list',1)
			->join('applied_jobs','applied_jobs.job_id','jobs.id')
			->join('personaldetails','personaldetails.jobseeker_id','applied_jobs.jobseeker_id')
			->select('jobs.*','applied_jobs.*','personaldetails.*')->get();
	if($id->id){
			$job_id= $id->id;
			return view('employer.applicant_list_single_job',compact('job_id','retraive_aproved_jobs_infos','retrive_total_applied_infos','retrive_total_shortlisted_applicants'));
		}
		else{
		return view('employer.applicant_list_all_job',compact('retraive_aproved_jobs_infos','retrive_total_applied_infos','retrive_total_shortlisted_applicants'));
		}
	}
	
	
	public function applicantcv($id,$job_id=''){
		$ida = Auth::guard('employer')->user()->id;
		$personaldetail = personaldetails::where('jobseeker_id',$id)->get();
		$academicsdata = $this->getacademic($id);
		$get_training=$this->get_training_info($id);
		$get_refference = $this->get_refference_info($id);
		$item = applicationinfo::where('jobseeker_id',$id)->get();

        if (count($item)>0) {
            $items=$item;
        }
		
		if (count($personaldetail)>0) {
            $personaldetails=$personaldetail[0];
        }
		if (count($academicsdata)>0){
            $levelNames =[];
            foreach($academicsdata as $acadata) {
                $levelNames[$acadata->lavelofeducation_id] = $this->getLevelName($acadata->lavelofeducation_id);
            }

        }


        if (count($academicsdata)>0 && isset($academicsdata[0]->exam_title_id)) {
            $examtitlename =[];
            foreach($academicsdata as $acadata) {
                $examtitlename[$acadata->exam_title_id] = $this->getexamName($acadata->exam_title_id);
            }
  
        }

        if (count($academicsdata)>0 && isset($academicsdata[0]->groupormajor_id)) {
            $majorename =[];
            foreach($academicsdata as $acadata) {
                $majorename[$acadata->groupormajor_id] = $this->getmajorname($acadata->groupormajor_id);
            }

  
       }
	   $retrive_total_applied_infos = DB::table('jobs')
			->where('jobs.employer_id',$ida)->where('applied_jobs.short_list',0)
			->join('applied_jobs','applied_jobs.job_id','jobs.id')
			->join('personaldetails','personaldetails.jobseeker_id','applied_jobs.jobseeker_id')
			->select('jobs.*','applied_jobs.*','personaldetails.*')->get();
			
			$retrive_total_shortlisted_applicants = DB::table('jobs')
			->where('jobs.employer_id',$ida)
			->join('applied_jobs','applied_jobs.job_id','jobs.id')
			->where('applied_jobs.short_list',1)
			->join('personaldetails','personaldetails.jobseeker_id','applied_jobs.jobseeker_id')
			->select('jobs.*','applied_jobs.*','personaldetails.*')->get();
	   
	   
			$single_applicant_shortlists=DB::table('applied_jobs')
			->where('applied_jobs.employer_id',$ida)
			->where('applied_jobs.jobseeker_id',$id)
			->where('applied_jobs.job_id',$job_id)
			->select('applied_jobs.*')->get();
	   
		//return view('employer.applicantcv',compact('personaldetails','academicsdata','get_training','get_refference','items'));
		
	   $applicant_ids= DB::table('jobs')
			->where('jobs.employer_id',$ida)
			->join('applied_jobs','applied_jobs.job_id','jobs.id')
			->join('personaldetails','personaldetails.jobseeker_id','applied_jobs.jobseeker_id')
			->select('jobs.id','applied_jobs.jobseeker_id')->get();
			$i=1;
			$a_id=[];
			foreach($applicant_ids as $applicant_id){
				$applicant_id_array[$i]=$applicant_id->jobseeker_id;
				$i++;
			}
			$appluicant_status=array_search($id,$applicant_id_array);
			//return $tt;
			//return var_dump($a_id);
			if($appluicant_status){
		return view('employer.applicantcv',compact('personaldetails','academicsdata','get_training','get_refference','items','applicant_ids','retrive_total_shortlisted_applicants','retrive_total_applied_infos','single_applicant_shortlists'));
			}else{return "Error";}

	}
	//Academic Data..........
	private function getacademic($id){
		$academicData = DB::table('academics')->where('jobseeker_id',$id)->get();
		return $academicData;

	}
	private function getLevelName($levelId){
		return $levelname = DB::table('levelofeducations')->where('id',$levelId)->pluck('edulavelname');
	}
	private function getmajorname($majorid){
		$majorname = DB::table('groupoormajors')->where('id',$majorid)->pluck('groupname');
		if(count($majorname)>0){
			return $majorname;
		}else{
			return FALSE;
		}
	}
	private function get_training_info($jobseeker_id){
		$get_training = DB::table('trainings')->where('jobseeker_id',$jobseeker_id)->get();
		if (count($get_training )>0) {
			return $get_training;
		}else{
			return FALSE;
    }


	}
	private function get_refference_info($jobseeker_id){
		$get_refference = DB::table('js_references')->where('jobseeker_id',$jobseeker_id)->get();
		if (count($get_refference )>0) {
			return $get_refference;
		}else{
			return FALSE;
		}


	}
	private function getexamName($examId){
    return $examName = DB::table('exam_titles')->where('id',$examId)->pluck('name');
	}

}
