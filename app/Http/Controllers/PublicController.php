<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use DB;
use App\catagory;
use App\job;
use App\Applied_job;
use Auth;
use App\Employer;
use App\Jobseeker;

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

        $homenotice = $this->homepage_notice();

        $catagorys = $this->get_categorys();
        //return $this->countCategoryWiseJob();
         $catagorysWiseJobcount = $this->countCategoryWiseJob();
         $get_cats = $this->categorysForCountJob();
         $hotjobs = $this->hotJobs();
         $recemtJobs = $this->recemtJobs();

         $theme=$this->selecttheme();

         $populjobs= $this->popularjobs();
        return view('public.'.$theme,compact('portal_option','jobs','category','division','jobseekerlist','employerList','catagorys','catagorysWiseJobcount','get_cats','hotjobs','recemtJobs','populjobs','homenotice'));
    }
     

    //     return view('public.'.$theme,compact('portal_option','jobs','category','division','jobseekerlist','employerList','catagorys','catagorysWiseJobcount','get_cats','hotjobs','recemtJobs'));
    // }
        
// retrive homepage notice
    private function homepage_notice()
    {
      $notice = DB::table('notice')->where('status','1')->get();
      if (count($notice)>0) {
        return $notice;
      }else{
        return $notice =['not found'];
      }
    }

private function popularjobs()
  {
     $jobs=DB::table('applied_jobs')->join('jobs','applied_jobs.job_id','jobs.id')->join('empprofiles','empprofiles.employer_id','applied_jobs.employer_id')->join('catagories','catagories.id','jobs.catagory_id')->join('divisions','divisions.id','jobs.division_id')->select('applied_jobs.job_id','jobs.*','empprofiles.companyname','empprofiles.companylogo','empprofiles.companyaddress','catagories.catagoryname','divisions.name as div_name',DB::raw('COUNT(*) AS jobcount'))->where('jobs.published','1')->where('jobs.delete_status','0')->GROUPBY('applied_jobs.job_id')->orderBy('jobcount','desc')->get();
     $popularjobs=count($jobs)>0?$jobs:false;

      return $popularjobs;
  }
        
	private function getJobs()
    {
    	$jobs = DB::table('jobs')->join('divisions','divisions.id','jobs.division_id')->join('districts','districts.id','jobs.district_id')->select('jobs.*','divisions.name as div_name','districts.name')->where('published','1')->orderBy('id','desc')->get();
    	return $jobs;
    }
	
	  //hotjobs................
  private function hotJobs()
  {
      $jobs = DB::table('jobs')->join('empprofiles','jobs.employer_id','empprofiles.employer_id')->join('divisions','divisions.id','jobs.division_id')->join('catagories', 'jobs.catagory_id', '=', 'catagories.id')->select('jobs.*','empprofiles.companyname','empprofiles.companylogo','divisions.name as div_name','catagoryname as catname')->where('published',1)->orderBy('jobs.vacancies','desc')->take('5')->get();
      return $jobs;
  }

  //recentjob................
  private function recemtJobs()
  {
      $jobs = DB::table('jobs')->join('empprofiles','empprofiles.employer_id','jobs.employer_id')->join('divisions','divisions.id','jobs.division_id')->join('catagories', 'jobs.catagory_id', '=', 'catagories.id')->select('jobs.*','empprofiles.companyname','empprofiles.companylogo','divisions.name as div_name','catagoryname as catname')->where('published',1)->orderBy('jobs.id','desc')->take('5')->get();
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
           $individulalPart=ceil(count($category)/3);
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
            $searchableQuery=DB::table('jobs')->join('empprofiles','empprofiles.employer_id','jobs.employer_id')->join('divisions','divisions.id','jobs.division_id')->select('jobs.*','empprofiles.companyname','divisions.name as div_name')->where('jobtitle','like',$keyword.'%')->where('published',1)->orderBy('jobs.id','desc')->paginate(10);

            $searchableQuerycount=DB::table('jobs')->join('empprofiles','empprofiles.employer_id','jobs.employer_id')->join('divisions','divisions.id','jobs.division_id')->select('jobs.*','empprofiles.companyname','divisions.name as div_name')->where('jobtitle','like',$keyword.'%')->where('published',1)->orderBy('jobs.id','desc')->get();


             $countPrimarySearch=count($searchableQuerycount);
             }
       elseif($search_category==""){
         $searchableQuery=DB::table('jobs')->join('empprofiles','empprofiles.employer_id','jobs.employer_id')->join('divisions','divisions.id','jobs.division_id')->select('jobs.*','empprofiles.companyname','divisions.name as div_name')->where('jobtitle','like',$keyword.'%')->where('division_id',$search_division)->where('published',1)->orderBy('jobs.id','desc')->paginate(10);

          $searchableQuerycount=DB::table('jobs')->join('empprofiles','empprofiles.employer_id','jobs.employer_id')->join('divisions','divisions.id','jobs.division_id')->select('jobs.*','empprofiles.companyname','divisions.name as div_name')->where('jobtitle','like',$keyword.'%')->where('division_id',$search_division)->where('published',1)->orderBy('jobs.id','desc')->get();




 $searchableQuerycount=count($searchableQuerycount);



       }
       elseif($search_division==""){
         $searchableQuery=DB::table('jobs')->join('empprofiles','empprofiles.employer_id','jobs.employer_id')->join('divisions','divisions.id','jobs.division_id')->select('jobs.*','empprofiles.companyname','divisions.name as div_name')->where('jobtitle','like',$keyword.'%')->where('catagory_id',$search_category)->where('published',1)->orderBy('jobs.id','desc')->paginate(10);

       $searchableQuerycount=DB::table('jobs')->join('empprofiles','empprofiles.employer_id','jobs.employer_id')->join('divisions','divisions.id','jobs.division_id')->select('jobs.*','empprofiles.companyname','divisions.name as div_name')->where('jobtitle','like',$keyword.'%')->where('catagory_id',$search_category)->where('published',1)->orderBy('jobs.id','desc')->get();
        
          


          $countPrimarySearch=count($searchableQuerycount);


       }
       else{
        $searchableQuery=DB::table('jobs')->join('empprofiles','empprofiles.employer_id','jobs.employer_id')->join('divisions','divisions.id','jobs.division_id')->select('jobs.*','empprofiles.companyname','divisions.name as div_name')->where('jobtitle','like',$keyword.'%')->where('division_id',$search_division)->where('catagory_id',$search_category)->where('published',1)->orderBy('jobs.id','desc')->paginate(10);

         $searchableQuerycount=DB::table('jobs')->join('empprofiles','empprofiles.employer_id','jobs.employer_id')->join('divisions','divisions.id','jobs.division_id')->select('jobs.*','empprofiles.companyname','divisions.name as div_name')->where('jobtitle','like',$keyword.'%')->where('division_id',$search_division)->where('catagory_id',$search_category)->where('published',1)->orderBy('jobs.id','desc')->get();


         $countPrimarySearch=count($searchableQuerycount);
        
        }
       
      


        $category = $this->get_category();

        $division = $this->get_division();
         $divisions=$this->get_divisions();
        $count_by_div=$this->count_jobs_by_divisionwise();
        $countCategoryWiseJob=$this->countCategoryWiseJob();

        $categorysForCountJob=$this->categorysForCountJob();
       
        $get_ind=$this->get_industrytype();
       $pic=$this->particular_count_industrytype();

        $todays_job=$this->todays_job();

       $two_days_agos_job=$this->two_days_agos_job();
       $seven_days_agos_job=$this->seven_days_agos_job();
       $last_months_job=$this->last_months_job();
        $companyName=$this->companyiesForCountJob();
        $countCompanyWiseJob=$this->countCompanyWiseJob();
        $jobtypecount=$this->jobtypecount();
         $catMachingName=$this->catMachingName();
         $locMachingName=$this->locMachingName();
     
       //return  dump($jobs);
         $theme=$this->selecttheme();
        if($theme=='newblue'){
            return  view('public.search3',compact("searchableQuery",'category','division', 'count_by_div','divisions','pic','get_ind','countCategoryWiseJob','categorysForCountJob','todays_job','two_days_agos_job','seven_days_agos_job','last_months_job','companyName','countCompanyWiseJob','jobtypecount','countPrimarySearch','catMachingName','locMachingName'));
        }else{
        
       //return  dump($jobs);
        return  view('public.search2',compact("searchableQuery",'category','division', 'count_by_div','divisions','pic','get_ind','countCategoryWiseJob','categorysForCountJob','todays_job','two_days_agos_job','seven_days_agos_job','last_months_job','companyName','countCompanyWiseJob','jobtypecount','countPrimarySearch','catMachingName','locMachingName'));
        }


    }

// get all divisions
private function get_divisions(){
    $alldiv=DB::table('divisions')->get();
    return $alldiv;
}

//count jobs by divisionwise
private function count_jobs_by_divisionwise(){
// $count=DB::table('jobs')->select('division_id',DB::raw('COUNT(*) as num_jobs, GROUP_CONCAT(id) AS jobnum'))->groupBy('division_id')->get();

// $users = DB::table('users')
//                      ->select(DB::raw('count(*) as user_count, status'))
//                      ->where('status', '<>', 1)
//                      ->groupBy('status')
//                      ->get();

    // $count=

 $counts=[];
    foreach($this->get_divisions() as $c){
     $counts[$c->id]=$this->get_num_of_rows_by_divisionwise_job($c->id);
}

return $counts;
}
//get division wise job count.......
private function get_num_of_rows_by_divisionwise_job($id){

$divcount=DB::table('jobs')->where('division_id',$id)->where('published',1)->get();
return count($divcount);
}

// start get all industry type----
 




private function get_industrytype(){
$get_industrytype=DB::table('industrytypes')->get();
    return $get_industrytype;

}
  private function count_industrytypesjob($id){
    $count_industrytypesjob= DB::table('jobs')->where('industrytype_id',$id)->where('published',1)->get();
    return count($count_industrytypesjob);

  }

  private function particular_count_industrytype(){
    $array=[];
    foreach($this->get_industrytype() as $i){
        $array[$i->id]=$this->count_industrytypesjob($i->id);
    }
    return $array;

  }

// end all industry type----


//get all catagory-----------



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
    $cat = DB::table('catagories')->get();
    return $cat;
}

private function countCatJob($id)
{
    $catCount = DB::table('jobs')->where('catagory_id',$id)->where('published','1')->get();
    return count($catCount);
}


//end all category----------

//start companywise search

 private function countCompanyWiseJob()
{
    $companyName = $this->companyiesForCountJob();

    $array = array();
    foreach ($companyName as $com) {
        $array[$com->id]= $this->countComJob($com->id);
    }

    
    return $array;
    
}

private function companyiesForCountJob()
{
    $company = DB::table('empprofiles')->get();
    return $company;
}

private function countComJob($id)
{
    $countComJob = DB::table('jobs')->where('employer_id',$id)->where('published','1')->get();
    return count($countComJob);
}


//end companywise search
//all datewise filterable jobs------------------------
private function todays_job(){
$today = Carbon::today();
$tomorrow=carbon::tomorrow();
$today_j=DB::table('jobs')->where('published',1)->whereBetween('created_at',array($today,$tomorrow))->get();
return count($today_j);
}

private function two_days_agos_job(){
$today = Carbon::today();
$two_days_ago=$today->subDays(2);
$current_date=Carbon::today();

$six_days_ago=$current_date->subDays(6);

//return $six_days_ago;
$two_days_agos_job=job::where('published',1)->whereBetween('created_at',array($two_days_ago,carbon::today()))->get();
return count($two_days_agos_job);
}
private function seven_days_agos_job(){
$today = Carbon::today();
$sevendays_ago=$today->subDays(7);




$seven_days_agos_job=job::where('published',1)->whereBetween('created_at',array($sevendays_ago,carbon::today()))->get();

return count($seven_days_agos_job);
}
private function last_months_job(){
    $today = Carbon::today();

$thirty_days_ago=$today->subDays(30);

$last_months_job=DB::table('jobs')->where('published',1)->whereBetween('created_at',array($thirty_days_ago,carbon::today()))->get();
return count($last_months_job);
}


//all datewise filterable jobs end------------------------

//all jobtype filterable jobs start----------------
public function jobtypecount(){

$fulltime=DB::table('jobs')->where('published','1')->where('jobtype','full-time')->get();
$fulltimeCount=count($fulltime);

$partime=DB::table('jobs')->where('published','1')->where('jobtype','part-time')->get();
$partimeCount=count($partime);

$contactual=DB::table('jobs')->where('published','1')->where('jobtype','contactual')->get();
$contactualCount=count($contactual);
return array($fulltimeCount,$partimeCount,$contactualCount);

}


// private function salaryRangeCount(){
//     $firstgrade=DB::table('jobs')->where('published','1')->whereBetween('salaryrange',array(0,24999))->get();
//     $countFirstgrade=count($firstgrade);
//      $scndgrade=DB::table('jobs')->where('published','1')->whereBetween('salaryrange',array(25000,49999))->get();
//     $countScndgrade=count($scndgrade);
//      $thirdgrade=DB::table('jobs')->where('published','1')->whereBetween('salaryrange',array(50000,99999))->get();
//     $countThirdgrade=count($thirdgrade);
//      $fourthgrade=DB::table('jobs')->where('published','1')->where('salaryrange','>=','100000')->get();
//     $countFourthgrade=count($fourthgrade);
//     return array($countFirstgrade,$countScndgrade,$countThirdgrade,$countFourthgrade);
// }







//all jobtype filterable jobs end----------------

//necessary funciton for showing search message

public function catMachingName(){

$matchingName=[];
$catformatchingname=DB::table('catagories')->get();
foreach($catformatchingname as $catmatch){
  $matchingName[$catmatch->id] = $catmatch->catagoryname;
}
return $matchingName;
}

public function locMachingName(){

$matchingName=[];
$locformatchingname=DB::table('divisions')->get();
foreach($locformatchingname as $locmatch){
  $matchingName[$locmatch->id] = $locmatch->name;
}
return $matchingName;
}
public function industryMachingName(){

$matchingName=[];
$industryformatchingname=DB::table('industrytypes')->get();
foreach($industryformatchingname as $industrymatch){
  $matchingName[$industrymatch->id] = $industrymatch->industrytypename;
}
return $matchingName;
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
      $catjobs = DB::table('jobs')->join('empprofiles','empprofiles.employer_id','jobs.employer_id')->join('divisions','jobs.division_id','divisions.id')->select('jobs.*','empprofiles.companyname','empprofiles.companylogo','divisions.name as divnmae')->where('catagory_id',$id)->where('published',1)->paginate(10);
        if(count($catjobs)>0){
            //return dump($catjobs);
            
   $category = $this->get_category();

   $division = $this->get_division();
    $divisions=$this->get_divisions();
   $count_by_div=$this->count_jobs_by_divisionwise();
   $countCategoryWiseJob=$this->countCategoryWiseJob();

   $categorysForCountJob=$this->categorysForCountJob();
  
   $get_ind=$this->get_industrytype();
  $pic=$this->particular_count_industrytype();

   $todays_job=$this->todays_job();

  $two_days_agos_job=$this->two_days_agos_job();
  $seven_days_agos_job=$this->seven_days_agos_job();
  $last_months_job=$this->last_months_job();
   $companyName=$this->companyiesForCountJob();
   $countCompanyWiseJob=$this->countCompanyWiseJob();
   $jobtypecount=$this->jobtypecount();
    $catMachingName=$this->catMachingName();
    $locMachingName=$this->locMachingName();





        



            return view('public.category_wise_job',compact('catjobs','category','division','divisions','count_by_div','countCategoryWiseJob','categorysForCountJob','get_ind','pic','todays_job','two_days_agos_job','seven_days_agos_job','last_months_job','companyName','countCompanyWiseJob','jobtypecount','catMachingName','locMachingName','relatedJobs','title','relatedJobsCount'));

        }else
        {
           return false;
        }  

    }


//     public function jobsdescription($id){

//     $apply='false';
//     $catagories=catagory::all();
//     $jobdata = job::
//             join('empprofiles', 'jobs.employer_id', '=', 'empprofiles.employer_id')
//             ->join('catagories', 'jobs.catagory_id', '=', 'catagories.id')
//             ->join('industrytypes', 'jobs.industrytype_id', '=', 'industrytypes.id')
//             ->join('districts', 'jobs.district_id', '=', 'districts.id')
//             ->join('divisions', 'jobs.division_id', '=', 'divisions.id')


//             ->select('jobs.*','empprofiles.companyname','empprofiles.companyaddress', 'catagories.catagoryname', 'industrytypes.industrytypename','districts.name as distname','divisions.name as divname')
//             ->where('jobs.id',$id)
//             ->get();

        
//             if(Auth::guard('jobseeker')->check()){
//             $jobseeker_id=Auth::guard('jobseeker')->user()->id;
//           $check=Applied_job::where('job_id',$id)->where('jobseeker_id',$jobseeker_id)->get();
//          $num_rows=count($check);
//          if($num_rows>0){
//         $apply='true';
//     }
          

        
       
//  }

//      return view('public.showjobs',compact('jobdata','apply'));


// }








//count category wise job

// private function countCategoryWiseJob()
// {
//     //$CountCatJObs = DB::table('jobs')->where('catagory_id',$catID)->get();
//     $catagorys = $this->get_cat_for_count_job();

//     $CountCatJObs = DB::table('jobs')->whereIn('catagory_id',$catagorys)->get();
//     return count($CountCatJObs);
    
// }

// //get categorys.......
// private function get_cat_for_count_job(){
//     $cat = DB::table('catagories')->select('id')->get();
//     $catId=[];
//      foreach ($cat as $c) {
//          array_push($catId, $c->id);
//      }
//      return $catId;
// }

// public function filter(Request $r){
//    if($r->location>0 && $r->industry>0 && $r->category>0){
//     $searchQuery=DB::table('jobs')->whereIn('division_id',$r->location)->whereIn('industrytype_id',$r->industry)->whereIn('catagory_id',$r->category)->whereIn('company_id',$r->company_id)->whereIn('created_at',$r->date)->whereIn('salary_range',$r->salary_range)whereIn('jobType',$r->jobType)->orderByRaw($r->shortby)->get();

//     if(count($searchQuery)>0){
//         return $searchQuery;

//     }
//     else{
//         return '<h2 class="alert-danger">no seaerch result found</h2>';
//     }


//    }
//    else{
//     //return '<h2 class="alert-danger">no seaerch result found</h2>';
//     //return $r->shortby;
//    }

// }



// }


public function filter(Request $r){

    $searchQuery = DB::table('jobs')->where('published','1');

    if($r->location){
        $searchQuery=$searchQuery->whereIn('division_id', $r->location);
    }
    if($r->industry){
        $searchQuery=$searchQuery->whereIn('industrytype_id', $r->industry);
    }
    if($r->category){
        $searchQuery=$searchQuery->whereIn('catagory_id',$r->category);
    }
    if($r->company_id){

       $searchQuery=$searchQuery->whereIn('jobs.employer_id', $r->company_id);
  }
  if($r->date){
  
            if(in_array('t', $r->date) && in_array('p2', $r->date) && in_array('p7', $r->date) && in_array('p30', $r->date)){
              // $searchQuery=$searchQuery->whereBetween('created_at',array(carbon::today(),carbon::tomorrow()))->orWhereBetween('created_at',array(carbon::today()->subDays(2),carbon::today()))->orWhereBetween('created_at',array(carbon::today()->subDays(7),carbon::today()))->orWhereBetween('created_at',array(carbon::today()->subDays(30),carbon::today()));

               // $searchQuery=$searchQuery->whereBetween('created_at',array(carbon::today(),carbon::tomorrow()))->orWhereBetween('created_at',array(carbon::today()->subDays(2),carbon::today()))->orWhereBetween('created_at',array(carbon::today()->subDays(7),carbon::today()))->orWhereBetween('created_at',array(
               //  carbon::today()->subDays(30),carbon::today()));


                $searchQuery=$searchQuery->Where(function ($query) {
                $query->
                whereBetween('jobs.created_at',array(carbon::today(),carbon::tomorrow()))->
                orWhereBetween('jobs.created_at',array(carbon::today()->subDays(2),carbon::today()))->
                orWhereBetween('jobs.created_at',array(carbon::today()->subDays(7),carbon::today()))->
                orWhereBetween('jobs.created_at',array(carbon::today()->subDays(30),carbon::today()));
            });
            
            }
            else if(in_array('t', $r->date) && in_array('p2', $r->date) && in_array('p7', $r->date)){
                $searchQuery=$searchQuery->Where(function ($query) {
                $query->
                whereBetween('jobs.created_at',array(carbon::today(),carbon::tomorrow()))->
                orWhereBetween('jobs.created_at',array(carbon::today()->subDays(2),carbon::today()))->
                orWhereBetween('jobs.created_at',array(carbon::today()->subDays(7),carbon::today()));
            });
            }
              else if(in_array('t', $r->date) && in_array('p7', $r->date) && in_array('p30', $r->date)){
                $searchQuery=$searchQuery->Where(function ($query) {
                $query->
                whereBetween('jobs.created_at',array(carbon::today(),carbon::tomorrow()))->
             
                orWhereBetween('jobs.created_at',array(carbon::today()->subDays(7),carbon::today()))->
                orWhereBetween('jobs.created_at',array(carbon::today()->subDays(30),carbon::today()));
            });

               
            }
              else if(in_array('t', $r->date) && in_array('p2', $r->date) && in_array('p30', $r->date)){
                $searchQuery=$searchQuery->Where(function ($query) {
                $query->
                whereBetween('jobs.created_at',array(carbon::today(),carbon::tomorrow()))->
                orWhereBetween('jobs.created_at',array(carbon::today()->subDays(2),carbon::today()))->
             
                orWhereBetween('jobs.created_at',array(carbon::today()->subDays(30),carbon::today()));
            });
            }

              else if(in_array('p2', $r->date) && in_array('p7', $r->date) && in_array('p30', $r->date)){
                $searchQuery=$searchQuery->Where(function ($query) {
                $query->
               
                whereBetween('jobs.created_at',array(carbon::today()->subDays(2),carbon::today()))->
                orWhereBetween('jobs.created_at',array(carbon::today()->subDays(7),carbon::today()))->
                orWhereBetween('jobs.created_at',array(carbon::today()->subDays(30),carbon::today()));
            });
            }
              else if(in_array('t', $r->date) && in_array('p2', $r->date)){

                $searchQuery=$searchQuery->Where(function ($query) {
                $query->
                whereBetween('jobs.created_at',array(carbon::today(),carbon::tomorrow()))->
                orWhereBetween('jobs.created_at',array(carbon::today()->subDays(2),carbon::today()));
            });
               
            }
              else if(in_array('t', $r->date) && in_array('p7', $r->date)){
                $searchQuery=$searchQuery->Where(function ($query) {
                $query->
                whereBetween('jobs.created_at',array(carbon::today(),carbon::tomorrow()))->
               
                orWhereBetween('jobs.created_at',array(carbon::today()->subDays(7),carbon::today()));
   
            });
            }
             else if(in_array('t', $r->date) && in_array('p30', $r->date)){
                $searchQuery=$searchQuery->Where(function ($query) {
                $query->
                whereBetween('jobs.created_at',array(carbon::today(),carbon::tomorrow()))->
               
                orWhereBetween('jobs.created_at',array(carbon::today()->subDays(30),carbon::today()));
            });
            }
              else if(in_array('p2', $r->date) && in_array('p7', $r->date)){
                  $searchQuery=$searchQuery->Where(function ($query) {
                $query->
               
                whereBetween('jobs.created_at',array(carbon::today()->subDays(2),carbon::today()))->
                orWhereBetween('jobs.created_at',array(carbon::today()->subDays(7),carbon::today()));
               
            });
            }
              else if(in_array('p2', $r->date) && in_array('p30', $r->date)){
                  $searchQuery=$searchQuery->Where(function ($query) {
                $query->
               
                whereBetween('jobs.created_at',array(carbon::today()->subDays(2),carbon::today()))->
              
                orWhereBetween('jobs.created_at',array(carbon::today()->subDays(30),carbon::today()));
            });
            }
             else if(in_array('p7', $r->date) && in_array('p30', $r->date)){
                $searchQuery=$searchQuery->Where(function ($query) {
                $query->
               
                whereBetween('jobs.created_at',array(carbon::today()->subDays(7),carbon::today()))->
                orWhereBetween('jobs.created_at',array(carbon::today()->subDays(30),carbon::today()));
            });
            }
              else if(in_array('t', $r->date)){
               $searchQuery=$searchQuery->whereBetween('jobs.created_at',array(carbon::today(),carbon::tomorrow()));
            }
            else if(in_array('p2', $r->date)){
              $searchQuery=$searchQuery->whereBetween('jobs.created_at',array(carbon::today()->subDays(2),carbon::today()));
              } 
            else if(in_array('p7', $r->date)){
               $searchQuery=$searchQuery->whereBetween('jobs.created_at',array(carbon::today()->subDays(7),carbon::today())); 
            }
            else if(in_array('p30', $r->date)){
               $searchQuery=$searchQuery->whereBetween('jobs.created_at',array(carbon::today()->subDays(30),carbon::today()));
            }


            
        }



   //return $r->date;
     //$searchQuery=$searchQuery->whereBetween('created_at', [$r->date]);
    // if(in_array('t',$r->date)){
    //      $searchQuery=$searchQuery->whereBetween('employer_id', $r->company_id)
    // }
    // if(in_array('p2', $r->date)){
    //     $i++;
    // }
    // if(in_array('p7', $r->date)){
    //     $i++;
    // }
    // if(in_array('p30', $r->date)){
    //     $i++;
    // }
    // return $i;
    // }
   
  // if($r->salary_range){
  //         $searchQuery=$searchQuery->whereIn('salaryrange', $r->salary_range);
  //    }
  if($r->jobtype){
       $searchQuery->whereIn('jobtype', $r->jobtype);
  }

    // $searchQuery=$searchQuery->orderBy('id','desc')->get();
    // return $searchQuery;
  $countTotalSearchableJob=count($searchQuery->get());
        $category = $this->get_category();
        if($r->shortby){
  $searchQuery=$searchQuery->join('divisions','jobs.division_id','divisions.id')->join('empprofiles','jobs.employer_id','empprofiles.employer_id')->select('jobs.*','divisions.name as div_name','empprofiles.companyname')->orderByRaw($r->shortby)->paginate(10);
        }
        else{
  $searchQuery=$searchQuery->join('divisions','jobs.division_id','divisions.id')->join('empprofiles','jobs.employer_id','empprofiles.employer_id')->select('jobs.*','divisions.name as div_name','empprofiles.companyname')->orderBy('id','desc')->paginate(10);
        }
  

        $division = $this->get_division();
         $divisions=$this->get_divisions();
        $count_by_div=$this->count_jobs_by_divisionwise();
        $countCategoryWiseJob=$this->countCategoryWiseJob();
        $countCategoryWiseJob;

         $categorysForCountJob=$this->categorysForCountJob();
       
        $get_ind=$this->get_industrytype();
       $pic=$this->particular_count_industrytype();

        $todays_job=$this->todays_job();

       $two_days_agos_job=$this->two_days_agos_job();
       $seven_days_agos_job=$this->seven_days_agos_job();
       $last_months_job=$this->last_months_job();
       $companyName=$this->companyiesForCountJob();
       $countCompanyWiseJob=$this->countCompanyWiseJob();
       $jobtypecount=$this->jobtypecount();
       $catMachingName=$this->catMachingName();
       $locMachingName=$this->locMachingName();
       $industryMachingName=$this->industryMachingName();
       //return $salaryrangeCount=$this->salaryRangeCount();


     
       //return  dump($jobs);
    $theme=$this->selecttheme();
     if($theme=='newblue'){
        return  view('public.finalsearch2',compact("searchableQuery",'category','division', 'count_by_div','divisions','pic','get_ind','countCategoryWiseJob','categorysForCountJob','todays_job','two_days_agos_job','seven_days_agos_job','last_months_job','companyName','countCompanyWiseJob','searchQuery','jobtypecount','countTotalSearchableJob','catMachingName','locMachingName','industryMachingName'));
    }else{
       //return  dump($jobs);
        return  view('public.finalsearch',compact("searchableQuery",'category','division', 'count_by_div','divisions','pic','get_ind','countCategoryWiseJob','categorysForCountJob','todays_job','two_days_agos_job','seven_days_agos_job','last_months_job','companyName','countCompanyWiseJob','searchQuery','jobtypecount','countTotalSearchableJob','catMachingName','locMachingName','industryMachingName'));
    }

  
}

 //public function filter(Request $r){
// $searchQuery=DB::table('jobs')->whereIn('division_id',$r->location)->whereIn('industrytype_id',$r->industry)->whereIn('category_id',$r->category)->whereIn('company_id',$r->company_id)->whereIn('created_at',$r->date)->whereIn('salary_range',$r->salary_range)whereIn('jobType',$r->jobType)->orderByRaw($r->shortby)->get();
// }

// public function scopeDivision($query,$searchParameter)
//  {
//     if(!is_null($searchParameter){
//       return $query->whereIn('division_id', $searchParameter);
//     }else{
//       return $query;
//     }
//  }

//  public function scopeIndustryType($query,$searchParameter)
//  {
//     if(!is_null($searchParameter){
//       return $query->whereIn('industrytype_id', $searchParameter);
//     }else{
//       return $query;
//     }

private function selecttheme(){
         $selectfontpage=DB::table('frontpagethemes')->where('status','1')->pluck('pagename');

        //  if(count($selectfontpage)>0){$selectedtheme=$theme[0];}else{
        //     $selectedtheme='public';
        // }
         $selecttheme=count($selectfontpage)>0?$selectfontpage[0]:'public';
         return $selecttheme;


    }
// show jobdetails by id

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
     return view('public.showjobsbyid',compact('jobdata','catagories','apply','relatedJobs'));
      // return $jobdata;

}
//count job employer jobseeker jobs and total online
public function public_stastics(Request $request)
{
  if ($request->request = 'AJAX') {
    switch ($request->action) {
      case 'employer':
        return Employer::count();
        break;
      case 'jobseeker':
        return Jobseeker::count();
        break;
      case 'job':
        return Job::count();
        break;
      
      default:
        # code...
        break;
    }
  }else{
    return FALSE;
  }
}

public function relatedJobs(Request $r){



   $category = $this->get_category();

   $division = $this->get_division();
    $divisions=$this->get_divisions();
   $count_by_div=$this->count_jobs_by_divisionwise();
   $countCategoryWiseJob=$this->countCategoryWiseJob();

   $categorysForCountJob=$this->categorysForCountJob();
  
   $get_ind=$this->get_industrytype();
  $pic=$this->particular_count_industrytype();

   $todays_job=$this->todays_job();

  $two_days_agos_job=$this->two_days_agos_job();
  $seven_days_agos_job=$this->seven_days_agos_job();
  $last_months_job=$this->last_months_job();
   $companyName=$this->companyiesForCountJob();
   $countCompanyWiseJob=$this->countCompanyWiseJob();
   $jobtypecount=$this->jobtypecount();
    $catMachingName=$this->catMachingName();
    $locMachingName=$this->locMachingName();


$title=$r->rtitle;
$catid=DB::table('jobs')->where('jobs.id',$r->rid)->pluck('catagory_id');
    //return $catid;
   $relatedJobs=DB::table('jobs')->where('jobs.catagory_id',$catid)->where('jobs.id','!=',$r->rid)->join('empprofiles', 'jobs.employer_id', '=', 'empprofiles.employer_id') ->join('divisions', 'jobs.division_id', '=', 'divisions.id')->select('jobs.*','divisions.name as divname','empprofiles.companylogo as clogo','empprofiles.companyname')->orderByRaw('jobs.id','desc')->paginate(10);
$relatedJobsCt=DB::table('jobs')->where('jobs.catagory_id',$catid)->where('jobs.id','!=',$r->rid)->get();

   $relatedJobsCount=count($relatedJobsCt);
return view('public.relatedJobs',compact('category','division','divisions','count_by_div','countCategoryWiseJob','categorysForCountJob','get_ind','pic','todays_job','two_days_agos_job','seven_days_agos_job','last_months_job','companyName','countCompanyWiseJob','jobtypecount','catMachingName','locMachingName','relatedJobs','title','relatedJobsCount'));

}


  }