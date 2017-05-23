<?php

namespace App\Http\Controllers\inspector;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use DB;


use App\Mail\jobmail;
use App\Mail\jobmailpublished;
use Mail;

class JobManagement extends Controller
{
 
 	public function job_index(){
 		$show_jobdetails=$this->ShowJobDetails_unpublished();

        $division = DB::table('divisions')->pluck('name','id');

        $cat=DB::table('catagories')->pluck('catagoryname','id');

        $industrytype=DB::table('industrytypes')->pluck('industrytypename','id');

 		return view('dashboard.job', compact('show_jobdetails','division','cat','industrytype'));

 	}


    private function ShowJobDetails_unpublished(){
     $get_jobdetails = DB::table('jobs')->join('empprofiles', 'jobs.employer_id','empprofiles.employer_id')
				->join('catagories', 'jobs.catagory_id','catagories.id')
				->join('industrytypes', 'jobs.industrytype_id', 'industrytypes.id')
				->select('jobs.*','empprofiles.companyname','empprofiles.companyaddress', 'catagories.catagoryname', 'industrytypes.industrytypename')
				->where('jobs.published','0')->where('jobs.delete_status','0')
				->get();

        if (count($get_jobdetails )>0) {
            return $get_jobdetails;
        }else{
            return FALSE;
        }


    }


    public function jobpublshed(Request $request){

        switch ($request->action) {
            case 'publishedjobs':
                    $item =DB::table('jobs')
                    ->where('id', $request->jobpub_id)
                    ->update(['published' => 1]);
                    return Mail::to($request->companyemail)->send(new jobmailpublished($request->jobtitle,$request->contactperson));
                    break;

                    case 'unpublishedjobs':
                    $item =DB::table('jobs')
                    ->where('id', $request->job_unpub_id)
                    ->update(['published' => 0]);
                    //return $request->jobtitle;
                    return Mail::to($request->companyemail)->send(new jobmail($request->jobtitle,$request->contactperson));
                
                    break;

                    case 'jobtrash':
                    $item =DB::table('jobs')
                    ->where('id', $request->jobtrash_id)
                    ->update(['delete_status' => 1]);
                    return 'job trashed';
                    break;

                    case 'restorejobs':
                    $item =DB::table('jobs')
                    ->where('id', $request->restore_id)
                    ->update(['delete_status' => 0]);
                    return 'job trashed';
                    break;

                    case 'job_details':
                        $jobprofile_details=$this->ShowJobDetails_profile($request->job_details_id);
                    return $jobprofile_details;
                    break;
                    case 'jobdelete':
                       $deletejob= DB::table('jobs')->where('id',$request->jobdelete_id)->delete();
                    return 'done';
                    case 'savejobinfo':
                       $item =DB::table('jobs')
                    ->where('id', $request->jobid)
                    ->update(['catagory_id' => $request->jobcategory,'industrytype_id' => $request->Jobindustrytype,'division_id' => $request->divisin_id,'district_id' => $request->district,'agerange' => $request->Agerange,'jobtype' => $request->JobType,'joblevel' => $request->JobLevel,'educational_qualification' => $request->EducationalQualification,'job_responsibilities' => $request->JobResponsivility,'job_experiences_year' => $request->JobExperiancesYear,'job_experiences_field' => $request->JobExperiancesField,'salaryrange' => $request->SalaryRange,'jobtitle' =>$request->jobtitle,'vacancies' =>$request->vacancies,'instruction' =>$request->Instruction,'deadline' =>$request->Deadline]);
                    return 'job information successfully updated';
                    break;

                    case 'updatejobcompanyinfo':
                       $item =DB::table('jobs')
                    ->where('id', $request->jobid_com)
                    ->update(['contactperson' => $request->contactperson,'designation' => $request->designation,'email' =>$request->email]);
                    return 'job information (co.)  successfully updated';
                    break;

            default:
                # code...
                break;
        }
    }
    

    public  function job_all_published()
    {
      
      $show_published_job=$this->ShowJobDetails_published();
        return view('dashboard.publishedjob', compact('show_published_job'));  

    }



      private function ShowJobDetails_published(){
     $get_jobdetails = DB::table('jobs')->join('empprofiles', 'jobs.employer_id','empprofiles.employer_id')
                ->join('catagories', 'jobs.catagory_id','catagories.id')
                ->join('industrytypes', 'jobs.industrytype_id', 'industrytypes.id')
                ->select('jobs.*','empprofiles.companyname','empprofiles.companyaddress', 'catagories.catagoryname', 'industrytypes.industrytypename')
                ->where('jobs.published','1')->where('jobs.delete_status','0')
                ->get();

        if (count($get_jobdetails )>0) {
            return $get_jobdetails;
        }else{
            return FALSE;
        }


    }

    public  function trashjob()
        {
          
          $show_trash_job=$this->ShowJobDetails_trash();
            return view('dashboard.jobreciclebin', compact('show_trash_job'));  

        }

          private function ShowJobDetails_trash(){
         $get_jobdetails = DB::table('jobs')->join('empprofiles', 'jobs.employer_id','empprofiles.employer_id')
                    ->join('catagories', 'jobs.catagory_id','catagories.id')
                    ->join('industrytypes', 'jobs.industrytype_id', 'industrytypes.id')
                    ->select('jobs.*','empprofiles.companyname','empprofiles.companyaddress', 'catagories.catagoryname', 'industrytypes.industrytypename')
                    ->where('jobs.delete_status','1')
                    ->get();

            if (count($get_jobdetails )>0) {
                return $get_jobdetails;
            }else{
                return FALSE;
            }


        }


        private function ShowJobDetails_profile($jobid){
         $get_jobdetails = DB::table('jobs')->join('empprofiles', 'jobs.employer_id','empprofiles.employer_id')
                    ->join('catagories', 'jobs.catagory_id','catagories.id')
                    ->join('employers', 'jobs.employer_id','employers.id')
                    ->join('industrytypes', 'jobs.industrytype_id', 'industrytypes.id') ->join('divisions', 'jobs.division_id', 'divisions.id') ->join('districts','jobs.district_id', 'districts.id')
                    ->select('jobs.*','empprofiles.companyname','empprofiles.companyaddress', 'catagories.catagoryname', 'industrytypes.industrytypename','divisions.name as divname','districts.name as distname','employers.name as employername')
                    ->where('jobs.id',$jobid)
                    ->get();

            if (count($get_jobdetails )>0) {
                return $get_jobdetails;
            }else{
                return FALSE;
            }


        }









        public function posted_job_index($id){
             $showcatagories=$this->showcatagory();
            $showindustrytypes=$this->showindustrytype();
            $showdivisions=$this->showdivision();
            $jobprofile_details=$this->Showtotaljob_post($id);
            return view('dashboard.posted_job_details',compact('jobprofile_details','showcatagories','showindustrytypes','showdivisions'));
        }
        public function published_job_index($id){
            $showcatagories=$this->showcatagory();
            $showindustrytypes=$this->showindustrytype();
            $showdivisions=$this->showdivision();
            $jobprofile_details=$this->Showtotaljob_published($id);
            return view('dashboard.published_job_details',compact('jobprofile_details','showcatagories','showindustrytypes','showdivisions'));
        }


        public function trashed_job_index($id){
            $showcatagories=$this->showcatagory();
            $showindustrytypes=$this->showindustrytype();
            $showdivisions=$this->showdivision();
            $jobprofile_details=$this->Showtotaljob_trashed($id);
            return view('dashboard.trashed_job_details',compact('jobprofile_details','showcatagories','showindustrytypes','showdivisions'));
        }


        
        
        private function Showtotaljob_post($employerid){
         $get_jobdetails = DB::table('jobs')->join('empprofiles', 'jobs.employer_id','empprofiles.employer_id')
                    ->join('catagories', 'jobs.catagory_id','catagories.id')
                    ->join('employers', 'jobs.employer_id','employers.id')
                    ->join('industrytypes', 'jobs.industrytype_id', 'industrytypes.id') ->join('divisions', 'jobs.division_id', 'divisions.id') ->join('districts','jobs.district_id', 'districts.id')
                    ->select('jobs.*','empprofiles.companyname','empprofiles.companyaddress', 'catagories.catagoryname', 'industrytypes.industrytypename','divisions.name as divname','districts.name as distname','employers.name as employername')
                    ->where('jobs.published','0')->where('jobs.delete_status','0')->where('jobs.employer_id',$employerid)
                    ->paginate(1);

            if (count($get_jobdetails )>0) {
                return $get_jobdetails;
            }else{
                return FALSE;
            }


        }



        private function Showtotaljob_published($employerid){
         $get_jobdetails = DB::table('jobs')->join('empprofiles', 'jobs.employer_id','empprofiles.employer_id')
                    ->join('catagories', 'jobs.catagory_id','catagories.id')
                    ->join('employers', 'jobs.employer_id','employers.id')
                    ->join('industrytypes', 'jobs.industrytype_id', 'industrytypes.id') ->join('divisions', 'jobs.division_id', 'divisions.id') ->join('districts','jobs.district_id', 'districts.id')
                    ->select('jobs.*','empprofiles.companyname','empprofiles.companyaddress', 'catagories.catagoryname', 'industrytypes.industrytypename','divisions.name as divname','districts.name as distname','employers.name as employername')
                    ->where('jobs.published','1')->where('jobs.delete_status','0')->where('jobs.employer_id',$employerid)
                    ->paginate(1);

            if (count($get_jobdetails )>0) {
                return $get_jobdetails;
            }else{
                return FALSE;
            }


        }



        private function Showtotaljob_trashed($employerid){
         $get_jobdetails = DB::table('jobs')->join('empprofiles', 'jobs.employer_id','empprofiles.employer_id')
                    ->join('catagories', 'jobs.catagory_id','catagories.id')
                    ->join('employers', 'jobs.employer_id','employers.id')
                    ->join('industrytypes', 'jobs.industrytype_id', 'industrytypes.id') ->join('divisions', 'jobs.division_id', 'divisions.id') ->join('districts','jobs.district_id', 'districts.id')
                    ->select('jobs.*','empprofiles.companyname','empprofiles.companyaddress', 'catagories.catagoryname', 'industrytypes.industrytypename','divisions.name as divname','districts.name as distname','employers.name as employername')
                    ->where('jobs.delete_status','1')->where('jobs.employer_id',$employerid)
                    ->paginate(1);

            if (count($get_jobdetails )>0) {
                return $get_jobdetails;
            }else{
                return FALSE;
            }


        }


private function showcatagory()
{
     $catagories = DB::table('catagories')->pluck('catagoryname','id');


            if (count($catagories )>0) {
                return $catagories;
            }else{
                return FALSE;
            }
}

private function showindustrytype()
{
     $industrytypename = DB::table('industrytypes')->pluck('industrytypename','id');


            if (count($industrytypename )>0) {
                return $industrytypename;
            }else{
                return FALSE;
            }
}

private function showdivision()
{
     $divisions = DB::table('divisions')->pluck('name','id');


            if (count($divisions )>0) {
                return $divisions;
            }else{
                return FALSE;
            }
}



}
