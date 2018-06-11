<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\personaldetails;
use Auth;
use App\applicationinfo;
use App\catagory;
use App\empprofile;
use App\block;
use App\follower;
use App\academic;
use App\exam_title;
use App\extraactivities;
use DB;
class jobseekerController extends Controller
{
    public function __construct()
    {
        $this->middleware('jobseeker');
    } 

// get index value

    public function index(){

        $catagories=catagory::all();
        
        $jid=Auth::guard('jobseeker')->user()->id;

        $personaldetail = personaldetails::where('jobseeker_id',$jid)->get();

        $levelofeducation = $this->get_levelof_education($jid);

        $academicsdata = $this->getacademic($jid);

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
        
    
        if (count($personaldetail)>0) {
            $personaldetails=$personaldetail[0];
        }
        $item = applicationinfo::where('jobseeker_id',$jid)->get();

        if (count($item)>0) {
            $items=$item;
        }else{
		$items = [];
	}
	
       if(count($this->getexamtitle())>0){
        $getexamtitle=$this->getexamtitle();
       }

       if(count($this->getgroup())>0){
        $getgroup=$this->getgroup();
       }

      $get_skill = $this->get_skill($jid);

      $get_training=$this->get_training_info($jid);

      $get_refference = $this->get_refference_info($jid);

      $extraActivities=$this->extraActivities();
       

    	return view('jobseeker.dashboard.dashboard',compact('levelofeducation','personaldetails','items','catagories','academicsdata','levelNames','examtitlename','majorename','getexamtitle','getgroup','get_skill','get_training','get_refference','extraActivities'));
    }


    private function get_levelof_education($jobseeker_id)
    {
        $levelofeducation =  DB::table('levelofeducations')->pluck('edulavelname','id');

        if (count($levelofeducation)>0) {
            return $levelofeducations=$levelofeducation;
        }else{
            return $levelofeducations = ['message'=>'No data found'];
        }
    }

// jobseeker profile update


    public function infoupdate(Request $request){

    	$jid=Auth::guard('jobseeker')->user()->id;
        
        
         switch ($request->action) {




            case 'showexamtitle':
                $examtitle=DB::table('exam_titles')->select('name','id')->where('levelofeducation_id',$request->id)->get();
                return response()->json($examtitle);
                break;
            case 'showgroup_mejor':
                $group=DB::table('groupoormajors')->select('groupname','id')->where('exam_title_id',$request->exam_title_id)->get();
                //$group=DB::table('groupoormajors')->where('exam_title_id',$request->exam_title_id)->pluck('groupname','id');
                
                return $group;
                break;
           
            case 'pinfoupdate':
                $personaldetail = personaldetails::where('jobseeker_id',$jid)->get();
                $personaldetails=$personaldetail[0];
                $personaldetails->full_name=$request->full_name;
                $personaldetails->jobseeker_father_name=$request->jobseeker_father_name;
                //return "ok";
                $personaldetails->jobseeker_mother_name=$request->jobseeker_mother_name;
                $personaldetails->jobseeker_dob=$request->jobseeker_dob;
                $personaldetails->jobseeker_gender=$request->jobseeker_gender;
                $personaldetails->jobseeker_maritalstatus=$request->jobseeker_maritalstatus;
                $personaldetails->jobseeker_nationality=$request->jobseeker_nationality;
                $personaldetails->jobseeker_national_id_no=$request->jobseeker_national_id_no;
                $personaldetails->jobseeker_religion=$request->jobseeker_religion;
                $personaldetails->jobseeker_permanent_address=$request->jobseeker_permanent_address;
                $personaldetails->jobseeker_current_address=$request->jobseeker_current_address;
                $personaldetails->jobseeker_current_location=$request->jobseeker_current_location;
                $personaldetails->jobseeker_phone1=$request->jobseeker_phone1;
                $personaldetails->jobseeker_phone2=$request->jobseeker_phone2;
                $personaldetails->jobseeker_email=$request->jobseeker_email;
                $personaldetails->jobseeker_email2=$request->jobseeker_email2;
                //return $personaldetails;
                //return "ok";
                $personaldetails->save();
                //refresh purpose for particular area of dashboard tab-pane
                return "#personal-tab";

                 break;
                 case 'cinfoupdate':
                     $items = applicationinfo::where('jobseeker_id',$jid)->get();
                     $item=$items[0];
                     $item->career_summary=$request->career_summary;
                     $item->special_qualification=$request->special_qualification;
                     $item->preferred_job_category=$request->preferred_job_category;
                     $item->preferred_district=$request->preferred_district;
                     $item->preferred_division=$request->preferred_division;
                     $item->preferred_organization_type=$request->preferred_organization_type;
                     $item->career_objective=$request->objective;
                     $item->lookingfor=$request->looking_for;
                     $item->availablefor=$request->available_for;
                     $item->presentsalary=$request->present_salary;
                     $item->expectedsalary=$request->expected_salary;
                     $item->save();

                 return "#personal-tab";
                 break;
                 case 'education_infoupdate':
                    $academics = new academic;
                    $academics->jobseeker_id            =$jid;
                    $academics->lavelofeducation_id     = $request->lavelofeducation_id;
                    $academics->groupormajor_id         = $request->groupormajor_id;
                    $academics->exam_title_id           = $request->exam_title_id;
                    $academics->result                  = $request->result;
                    $academics->marks                   = $request->marks;
                    $academics->institute               = $request->institute;
                    $academics->passing_year            = $request->passing_year;
                    $academics->duration                = $request->duration;
                    $academics->achievment              = $request->achievment;
                    $academics->save();
                    return 'Successfully Inserted';

                 break;
                case 'update_academic':
                 return $edit_academicdetails=DB::table('academics')->where('id',$request->edit_academicid)->get();
                 break;

                case 'education_editandupdate':
                //return 'abcd';
                    $academics=academic::where("id",$request->edit_academicid)->get();
                    //return $academics[0];
                    if (isset($request->lavelofeducation_id) && $request->lavelofeducation_id !=Null) {
                       $academics[0]->lavelofeducation_id     = $request->lavelofeducation_id;
                    }
                     if (isset($request->groupormajor_id) && $request->groupormajor_id !=Null) {
                       $academics[0]->groupormajor_id         = $request->groupormajor_id;
                    }
                    if (isset($request->exam_title_id) && $request->exam_title_id !=Null) {
                       $academics[0]->exam_title_id           = $request->exam_title_id;
                    }

                    $academics[0]->jobseeker_id            =$jid;
                    $academics[0]->result                  = $request->result;
                    $academics[0]->marks                   = $request->marks;
                    $academics[0]->institute               = $request->institute;
                    $academics[0]->passing_year            = $request->passing_year;
                    $academics[0]->duration                = $request->duration;
                    $academics[0]->achievment              = $request->achievment;
                    $academics[0]->save();
                    return 'Successfully Updated';
                break; 
                case 'skill_insert':
                        if(DB::table('specializations')->insert([
                                                    'jobseeker_id'=>$request->jobseeker_id,
                                                    'specializationorskill'=>$request->specializationorskill,
                                                    'skilldescription'=>$request->skilldescription,
                                                    ])){
                            return 'Succesfully Inserted';
                        };


                       # code...
                       break;  

                case 'skill_delete':
                   if(DB::table('specializations')->delete($request->delid)){
                    return "data deleted successfully";
                   }
                   break;
                case 'training_insert':
                if(DB::table('trainings')->insert([
                                                    'jobseeker_id'=>$jid,
                                                    'training_title'=>$request->training_title,
                                                    'topic'=>$request->topic,
                                                    'institute'=>$request->institute,
                                                    'location'=>$request->location,
                                                    'country'=>$request->country,
                                                    'year'=>$request->year,
                                                     'duration'=>$request->duration,
                                                    ])){
                            return 'Succesfully Inserted';
                    }
                   break;
                case 'training_delete':
                if(DB::table('trainings')->delete($request->delid)){
                    return "data deleted successfully";
                   }
                break;

                case 'refference_insert':
                    if(DB::table('js_references')->insert([
                            'jobseeker_id'=>$jid,
                            'reference_name'=>$request->reference_name,
                            'disignation' =>$request->disignation,
                            'organization' =>$request->organization,
                            'address' =>$request->address,
                            'office_phone' =>$request->office_phone,
                            'home_phone' =>$request->home_phone,
                            'mobile' =>$request->mobile,
                            'email' =>$request->email,
                            'relation' =>$request->relation,
                        ])){

                        return "data inserted successfully";
                    }
                    break;

                case 'refference_delete':
                    if(DB::table('js_references')->delete($request->delid)){
                    return "data deleted successfully";
                   }
                    break;
                
             default:
                 return 'no';
                 break;
         }
		
    	





    }
    private function getexamtitle(){
        return $getexamtitle=exam_title::pluck('name','id');
    }


    private function getgroup(){
        return $getexamtitle=DB::table('groupoormajors')->pluck('groupname','id');

    }






public function employerlist(){
    $jobseekerid= Auth::guard('jobseeker')->user()->id;
    $catagories=catagory::all();
    $company=empprofile::all();
     $block_id=block::where('jobseeker_id',$jobseekerid)->pluck('employer_id');
     $array=[];
    foreach($block_id as $block){
       array_push($array, $block);
    }

  


  
    // $a=[1,2,3];
    // if(in_array(2,$a)){
    //     return "true";
    // }
    // else{
    //     return "false";
    // }
    return view('jobseeker.companyname',compact('company','array','catagories'));

}

public function blockemp($id){
   $jobseekerid= Auth::guard('jobseeker')->user()->id;
    $block=new block;
    $block->jobseeker_id=$jobseekerid;
    $block->employer_id=$id;
    $block->save();
   
    return redirect('/jobseeker/blockEmployer');
}
public function unblockemp($id){
    //return $id;
    $jobseekerid= Auth::guard('jobseeker')->user()->id;
    $unblockid= block::where('jobseeker_id',$jobseekerid)->where('employer_id',$id)->pluck('id');
   //$block=new block;
  if(block::destroy($unblockid)){
 
    return redirect('/jobseeker/blockEmployer');
  }
}


public function femployerlist(){
    $jobseekerid= Auth::guard('jobseeker')->user()->id;
     $block_id=block::where('jobseeker_id',$jobseekerid)->pluck('employer_id');
    
    $catagories=catagory::all();
    $company=empprofile::whereNotIn('employer_id',$block_id)->get();
     $follow_id=follower::where('jobseeker_id',$jobseekerid)->pluck('employer_id');
     $array=[];
    foreach($follow_id as $follow){
       array_push($array, $follow);
}
    return view('jobseeker.followercompanyname',compact('company','array','catagories'));




}
public function followemp($id){

    $jobseekerid= Auth::guard('jobseeker')->user()->id;
    $follow=new follower;
    $follow->jobseeker_id=$jobseekerid;
    $follow->employer_id=$id;
    $follow->save();
 return redirect('/jobseeker/followEmployer');
}


public function unfollowemp($id){

   $jobseekerid= Auth::guard('jobseeker')->user()->id;
    $unfollowid= follower::where('jobseeker_id',$jobseekerid)->where('employer_id',$id)->pluck('id');

  if(follower::destroy($unfollowid)){
 
    return redirect('/jobseeker/followEmployer');
  }
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


private function getexamName($examId){
    return $examName = DB::table('exam_titles')->where('id',$examId)->pluck('name');
}

// Get skill info

private function get_skill($jobseeker_id)
{
    $get_skill = DB::table('specializations')->where('jobseeker_id',$jobseeker_id)->get();
    if (count($get_skill)>0) {
        return $get_skill;
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


    //upload profile image
    public function jobseeker_img_upload(Request $request)
    {
        $ida=Auth::guard('jobseeker')->user()->id;
        $jobsekker = personaldetails::where('jobseeker_id',$ida)->get();

        $request->file('profile_image');
        $extension=$request->profile_image->extension();
        //return $extension;
        $unique_image=$ida.".".$extension;
        //return $unique_image;
       //  if($jobsekker->profile_img)
       // {
       //     storage::delete('public/jobseeker_img/'.$jobsekker->profile_img);
       //       //return 'echo';
      
       //  }
        

        $request->profile_image->storeAs('/public/jobseeker_img',$unique_image);
        $jobsekker[0]->profile_img = $unique_image;
        $jobsekker[0]->save();
    }
    // extra activities
    private function extraActivities(){
        $jobseekerId = Auth::guard('jobseeker')->user()->id;
        $extraActivities = extraactivities::where('jobseeker_id', $jobseekerId)->get();
        if(count($extraActivities)>0){
        $array = explode(',', $extraActivities[0]->details);
        return $array;
       
     
    }
  }


}
