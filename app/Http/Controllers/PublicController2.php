<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\catagory;
use App\job;
use App\Applied_job;
use Auth;

class PublicController extends Controller
{
    public function index()
    {
        $jobs = $this->getJobs();

        $portal_option = $this->public_option();

        $category = $this->get_category();

        $division = $this->get_division();

        $jobseekerlist = $this->getJobseekerList();

        $employerList =$this->empprofilesList();

        $catagorys = $this->get_categorys();
        //return $this->countCategoryWiseJob();
         $catagorysWiseJobcount = $this->countCategoryWiseJob();

         $theme=$this->selecttheme();


        return view('public.'.$theme,compact('portal_option','jobs','category','division','jobseekerlist','employerList','catagorys','catagorysWiseJobcount'));
    }


        
	private function getJobs()
    {
    	$jobs = DB::table('jobs')->join('divisions','divisions.id','jobs.division_id')->join('districts','districts.id','jobs.district_id')->select('jobs.*','divisions.name as div_name','districts.name')->where('published','1')->get();
    	return $jobs;
    }



    private function public_option()
    {
    	// get all option
    	$portal_option = DB::table('public_options')
    	->where('status','1')
    	->pluck('option_value','option_name')
    	->all();
    	if (count($portal_option)>0) {
            return $portal_option;
        }else{
            return $portal_option = ['message'=>'No Public Option Found'];
        }
    }

    private function get_category()
    {
        $category = DB::table('catagories')->pluck('catagoryname','id');
        if(count($category)>0){
            return $category;
        }else
        {
            return $category = ['message'=>'No Category Found'];
        }
    }

    private function get_categorys()
    {
        $category = DB::table('catagories')->select('catagoryname','id')->get();
        if(count($category)>0){
           $individulalPart=round(count($category)/3);
          $catfirst=DB::table('catagories')->select('catagoryname','id')->take($individulalPart)->get();

          $catfirstskip=count($catfirst);
           $catsecond=DB::table('catagories')->select('catagoryname','id')->skip($catfirstskip)->take($individulalPart)->get();
         
          $skipcatsecond=count($catsecond)+$catfirstskip;
           $catthird=DB::table('catagories')->select('catagoryname','id')->skip($skipcatsecond)->take($individulalPart)->get();
          return $allcat=[$catfirst,$catsecond,$catthird];
        }else
        {
           return false;
        }
       
    }

    private function get_division()
    {
        $country = DB::table('countries')->where('name','Bangladesh')->pluck('id');
        $division = DB::table('divisions')->where('country_id',$country)->pluck('name','id');
        return $division;
        if(count($division)>0){
            return $division;
        }else
        {
            return $division = ['message'=>'No Division Found'];
        }
    }

    //search result 
    public function homepage_search(Request $search_item)
    {
        $keyword            = $search_item->keyword;
        $search_division    = $search_item->search_division;
        $search_category    = $search_item->search_category;
        if($search_division=="" && $search_category==""){
            $searchableQuery=DB::table('jobs')->join('empprofiles','empprofiles.employer_id','jobs.employer_id')->select('jobs.*','empprofiles.companyname')->where('jobtitle','like',$keyword.'%')->where('published',1)->paginate(10);
             }
       elseif($search_category==""){
         $searchableQuery=DB::table('jobs')->join('empprofiles','empprofiles.employer_id','jobs.employer_id')->select('jobs.*','empprofiles.companyname')->where('jobtitle','like',$keyword.'%')->where('division_id',$search_division)->where('published',1)->paginate(10);
       }
       elseif($search_division==""){
         $searchableQuery=DB::table('jobs')->join('empprofiles','empprofiles.employer_id','jobs.employer_id')->select('jobs.*','empprofiles.companyname')->where('jobtitle','like',$keyword.'%')->where('catagory_id',$search_category)->where('published',1)->paginate(10);


       }
       else{
        $searchableQuery=DB::table('jobs')->join('empprofiles','empprofiles.employer_id','jobs.employer_id')->select('jobs.*','empprofiles.companyname')->where('jobtitle','like',$keyword.'%')->where('division_id',$search_division)->where('catagory_id',$search_category)->where('published',1)->paginate(10);
        
        }

        $category = $this->get_category();

        $division = $this->get_division();
        return  view('public.search',compact("searchableQuery",'category','division'));

    }

    //get job seeker list 
    private function getJobseekerList()
    {
        $jobseekerList = DB::table('personaldetails')->orderBy('id', 'desc')->limit(20)
                ->get();
                if (count($jobseekerList)>0) {
                    return $jobseekerList;

                }else{
                    return FALSE;
                }
    }

    //get job seeker list 
    private function empprofilesList()
    {
        $empprofilesList = DB::table('empprofiles')->orderBy('id', 'desc')->limit(20)
                ->get();
                if (count($empprofilesList)>0) {
                    return $empprofilesList;

                }else{
                    return FALSE;
                }
    }

    public function get_job_by_cat($id){
       $catjobs = DB::table('jobs')->join('empprofiles','empprofiles.employer_id','jobs.employer_id')->select('jobs.*','empprofiles.*')->where('catagory_id',$id)->where('published',1)->get();
        if(count($catjobs)>0){
            
            return view('public.category_wise_job', compact('catjobs'));
        }else
        {
            $catjobs = false;
            return view('public.category_wise_job', compact('catjobs'));
        }  

    }


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

        
            if(Auth::guard('jobseeker')->check()){
            $jobseeker_id=Auth::guard('jobseeker')->user()->id;
          $check=Applied_job::where('job_id',$id)->where('jobseeker_id',$jobseeker_id)->get();
         $num_rows=count($check);
         if($num_rows>0){
        $apply='true';
    }
          

        
       
 }

     return view('public.showjobs',compact('jobdata','apply'));


}

//count category wise job

private function countCategoryWiseJob()
{
    $categorys = $this->categorysForCountJob();

    $array = array();
    foreach ($categorys as $cat) {
        $array[$cat->id]= $this->countCatJob($cat->id);
    }

    
    return $array;
    
}

private function categorysForCountJob()
{
    $cat = DB::table('catagories')->select('id')->get();
    return $cat;
}

private function countCatJob($id)
{
    $catCount = DB::table('jobs')->where('catagory_id',$id)->get();
    return count($catCount);
}

 private function selecttheme(){
         $selectfontpage=DB::table('frontpagethemes')->where('status','1')->pluck('pagename');

        //  if(count($selectfontpage)>0){$selectedtheme=$theme[0];}else{
        //     $selectedtheme='public';
        // }
         $selecttheme=count($selectfontpage)>0?$selectfontpage[0]:'public';
         return $selecttheme;


    }

}
