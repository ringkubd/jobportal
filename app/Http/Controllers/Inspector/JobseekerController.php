<?php

namespace App\Http\Controllers\Inspector;

use Illuminate\Http\Request;
use App\Jobseeker;
use App\personaldetails;
use App\academic;
use App\groupoormajors;
use App\levelofeducation;
use App\examTitle;
use App\specialization;
use App\extraactivities;
use App\languagepro;
use App\js_reference;
use App\applicationinfo;
use App\job;
use App\appliedJob;
use App\Employer;
use App\industrytype;
use App\catagory;
use App\jobseekerhistory;

use DB;
use App\Http\Controllers\Controller;


class JobseekerController extends Controller
{
    public function __construct()
    {
        $this->middleware('inspector');
    } 
    public function index(){
    	$jobseekers = Jobseeker::all();
    	//return $jobseekers;
    	return view('dashboard.jobseeker', compact('jobseekers'));
    }

    public function managejobseeker(Request $request){
     
        switch ($request->action) {
            case 'insertjobseeker':
                
                $item = new Jobseeker;
                $item->name = $request->jobseeker_name;
                $item->email = $request->jobseeker_email;
                $item->password =bcrypt($request->jobseeker_password);
                $item->save();
                break;
            
            case 'updatejobseeker':
                $item = Jobseeker::find($request->jobseekerid);
                $item->name = $request->jobseekername;
                $item->email = $request->jobseekeremail;
                $item->save();
                return $request->all();
                break;

                case 'deletejobseeker':
                Jobseeker::where('id',$request->jobseekerdelid)->delete();
                return $request->all();
                break;


                case 'rejectjobseeker':
                $item = Jobseeker::find($request->jobseekerrejectid);
                $item->status ='0';
                $item->save();
                return $request->all();
                break;


                case 'approvedjobseeker':
                $item = Jobseeker::find($request->approvejobseekerid);
                $item->status ='1';
                $item->save();
                return $request->all();
                break;

                case 'jobseekerpersonaldetail':
                $item = personaldetails::where('jobseeker_id',$request->viewjobseekerdetailid)->get();
                return $item;
                
                break;

                case 'jobseekeracademaicdetail':
                $item =academic::join('levelofeducations', 'academics.lavelofeducation_id', '=', 'levelofeducations.id')->join('exam_titles', 'academics.exam_title_id', '=', 'exam_titles.id')->join('groupoormajors', 'academics.groupormajor_id', '=', 'groupoormajors.id')
            ->select('academics.*', 'levelofeducations.edulavelname', 'exam_titles.name as examtitlename','groupoormajors.groupname')->where('jobseeker_id',$request->viewjobseekerdetailid)->get();
                return $item;
                
                break;

         case 'skilldetails':
               return $item = specialization::where('jobseeker_id',$request->viewjobseekerdetailid)->get(); 
                break;


        case 'extracariculamdetails':
            return $item = extraactivities::where('jobseeker_id',$request->viewjobseekerdetailid)->get(); 
            break;
    
       case 'languageeficiency':
            return $item = languagepro::where('jobseeker_id',$request->viewjobseekerdetailid)->get(); 
            break;

        case 'referencedetails':
            return $item = js_reference::where('jobseeker_id',$request->viewjobseekerdetailid)->get(); 
            break;

        case'applicationinformation':
            return $item=applicationinfo::where('jobseeker_id',$request->viewjobseekerdetailid)->get();
            break;

        case'jobseekerhistory':
            return $item=jobseekerhistory::where('jobseeker_id',$request->viewjobseekerdetailid)->get();
            break;

        case'appliedforjob':
            return $item=appliedJob::join('jobs', 'applied_jobs.job_id', '=', 'jobs.id')->join('employers','jobs.employer_id', '=', 'employers.id' )->join('catagories','jobs.catagory_id', '=','catagories.id' )->join('industrytypes','jobs.industrytype_id', '=','industrytypes.id' )->select('applied_jobs.*', 'jobs.*', 'employers.name as employername','catagories.catagoryname','industrytypes.industrytypename')->where('jobseeker_id',$request->viewjobseekerdetailid)->get();
            break;    

    

        }
    }


        //search functionality start.......

        public function jobseekersearch(Request $request){
            if($request->ajax()){
                $searchResult='' ;
                $i=1;
                $item_search = $request->search;
                $items = Jobseeker::where('name','LIKE',$item_search.'%')->orwhere('email','LIKE',$item_search.'%')->get();
                //return $item;
                if(count($items)==0){
                    $searchResult .= 'No item found';
                }else{
                    foreach ($items as $key => $value) {
                        
                        $searchResult.='<tr class="odd gradeX all_data">
                                    <td>'.$i++.'</td>
                                    <td class="jobseeker_name">'.$value->name.'</td>
                                    <td class="jobseeker_email">'.$value->email.'</td>
                                    <td class="jobseeker_created">'.$value->created_at.'</td>
                                    

                                    <td><button class="btn btn-primary btn-sm editproduct editbtn"  data-toggle="modal" data-target="#myModal" data-edit="'.$value->id.'"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button> || <button class="btn btn-danger btn-sm deljobseeker" data-delid="'.$value->id.'"><i class="fa fa-trash-o" aria-hidden="true"></i></button>||<button class="btn btn-success btn-sm approvedjobseeker" data-approved="'.$value->id.'">Approved</button>||<button class="btn btn-warning btn-sm rejectjobseeker" data-reject="'.$value->id.'">Reject</button><button class="btn btn-default btn-sm jobseekerdetails"  data-toggle="modal" data-target="#jobseekerview" data-viewdetails="'.$value->id.'">View</button></td>

                                </tr>';
                                         
                    }
                }
                return response($searchResult);
            }

        }

    //search functionality end.......





}