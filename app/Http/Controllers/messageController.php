<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\job;
use Illuminate\Http\Response;
use App\message;
use App\jobseeker;

class messageController extends Controller
{
    public function __construct()
    {
    	 // $this->middleware('employer');
    }

   // Show send message form

    public function empCreateNewMessage()
    {
    	$empId = Auth::guard('employer')->user()->id;

    	
    	if (count($this->getJobList($empId))>0) {
    		$jobLists = $this->getJobList($empId);
    	}else{
    		$jobLists = ['-1'=>'No Job Found'];
    	}
    	
    	return view('employer.newmessage',compact('jobLists'));
    }

    // Send Message 

    public function sendMessage(Request $request)
    {
        $empId = Auth::guard('employer')->user()->id;

    	//return $request->all();$request->all()

    	$sendmessgaeCon = message::create(['employer_sender_id'=>$empId,'jobseeker_recepent_id'=>$request->recepent_id,'subject'=>$request->subject,'messages'=>$request->message]);
    	return 'success';
    }

    //get aplied Jobseeker list
    private function getJobseekerlist($jobid,$employerId)
    {
    	$getAppliedJobseekerList = DB::table('applied_jobs')->where('job_id',$jobid)->pluck('jobseeker_id');
    	if (count($getAppliedJobseekerList)>0) {
    		return $getAppliedJobseekerList;
    	}else{
    		return false;
    	}
    }

    // //get specific jobid
    // private function getJobid($id)
    // {
    // 	$jobList = DB::table('jobs')->where('employer_id',$id)->select('id')->get();
    // 	if (count($jobList)>0) {
    // 		return $jobList;
    // 	}else{
    // 		return FALSE;
    // 	}
    // }

    //get job list on specific employer
    private function getJobList($id)
    {
    	$joblist = job::where('employer_id',$id)->pluck('jobtitle','id');
    	if (!empty($joblist)) {
    		return $joblist;
    	}else{
    		return FALSE;
    	}
    }
    //get applied job seeker list on specific job

    public function getAppliedJobseekerList(Request $request)
    {
    	if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')
		{   
			//return $request->jobid;
		$jobseekerList = DB::table('applied_jobs')
	    	->where('job_id',$request->jobid)
	    	->join('jobseekers','jobseekers.id','applied_jobs.jobseeker_id')
	    	->select('jobseekers.name','jobseekers.id')->get();
	    	return $jobseekerList; 
		    
		}else{
			return response('Not Found', $httpStatusCode = 404, $headers = ['Content-Type'=>'text/plain']);  
		}
    	
    }


    public function empInbox()
    {
    	$employerID = Auth::guard('employer')->user()->id;
        $unreadMessgae = message::where('employer_recepent_id',$employerID)->where('read_status','0')->get();
        $countUnread = count($unreadMessgae);
        $allMessage = DB::table('messages')->where('employer_recepent_id',$employerID)->join('jobseekers','jobseekers.id','messages.jobseeker_sender_id')->select('messages.*','jobseekers.name')->latest()->paginate(10);
        return view('employer.inbox',compact('countUnread','allMessage'));
    }

    public function empSent()
    {
    	return view('employer.sent');
    }

    public function empDraft()
    {
    	return view('employer.draft');
    }

    public function empTrash()
    {
    	return view('employer.trash');
    }


    //jobseeker inbox
    public function jsInbox()
    {

    	$jobseekerID = Auth::guard('jobseeker')->user()->id;
    	$unreadMessgae = message::where('jobseeker_recepent_id',$jobseekerID)->where('read_status','0')->get();
    	$countUnread = count($unreadMessgae);
    	$allMessage = DB::table('messages')->where('jobseeker_recepent_id',$jobseekerID)->join('employers','employers.id','messages.employer_sender_id')->select('messages.*','employers.name')->latest()->paginate(10);
    	return view('jobseeker.inbox',compact('countUnread','allMessage'));
    }


    //message option for both employer

    public function empmessageOption(Request $request)
    {
    	if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')
		{
			$updateConnection = new message();
			switch ($request->action) {
				case 'messageView':
					$updateConnection->where('id',$request->id)->update(['read_status'=>'1']);
					$messageDetils = $updateConnection->where('messages.id',$request->id)->join('jobseekers','jobseekers.id','messages.jobseeker_sender_id')->select('messages.*','jobseekers.name')->get();
                    return $messageDetils[0];
					break;

				case 'messageDelete':
					$updateConnection->distroy($request->id);
					return 'success';
					break;
				
				default:
					# code...
					break;
			}
    		
		}
    	
    }


    //jobseeker replay message

    public function replayMessage(Request $request)
    {
    	$sendmessgaeCon = message::create(['jobseeker_sender_id'=>$request->sender_id,'jobseeker_recepent_id'=>$request->recepent_id,'subject'=>$request->subject,'messages'=>$request->message]);
    	return 'success';
    }


    //message option for both jobseeker

    public function jsmessageOption(Request $request)
    {
        if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')
        {
            $updateConnection = new message();
            switch ($request->action) {
                case 'jsmessageView':
                    $updateConnection->where('id',$request->id)->update(['read_status'=>'1']);
                    $messageDetils = $updateConnection->where('messages.id',$request->id)->join('employers','employers.id','messages.employer_sender_id')->select('messages.*','employers.name')->get();
                    return $messageDetils[0];
                    break;

                case 'messageDelete':
                    $updateConnection->distroy($request->id);
                    return 'success';
                    break;
                
                default:
                    # code...
                    break;
            }
            
        }
        
    }

    // replay messgase
    public function jsmessageReplay(Request $request)
    {
        if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')
        {
            $js_id = Auth::guard('jobseeker')->user()->id;
            $message = message::create(['jobseeker_sender_id'=>$js_id,'employer_recepent_id'=>$request->recepent_id,'subject'=>$request->subject,'messages'=>$request->message]);
            return 'message send';
        }
    }


//jobseeker replay message

    public function EmpreplayMessage(Request $request)
    {
        if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')
        {
            $emp_id = Auth::guard('employer')->user()->id;
            $message = message::create(['employer_sender_id'=>$emp_id,'jobseeker_recepent_id'=>$request->recepent_id,'subject'=>$request->subject,'messages'=>$request->message]);
            return 'message send';
        }
    }

}
