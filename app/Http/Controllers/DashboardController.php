<?php

namespace App\Http\Controllers\Inspector;

use Carbon\carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('inspector');
    } 
    

    public function index(){
        $show_details=$this->ShowDetails();
        $show_newjobseeker=$this->newjobseeker();
        $show_ShowEmployer=$this->ShowEmployer();
        $show_ShowTotaljob=$this->ShowTotaljob();
        $Show_pendingJob=$this->ShowpendingJob();
        $Show_PublishedJob=$this->ShowPublishedJob();
        return view('dashboard.dashboard', compact('show_details','show_newjobseeker','show_ShowEmployer','show_ShowTotaljob','Show_pendingJob','Show_PublishedJob'));

    }


    private function ShowDetails(){
     $get_details = DB::table('jobseekers')->get();
     return $countjobseeker = count($get_details);

    }

    private function newjobseeker(){
     $get_newjobseeker = DB::table('jobseekers')->whereBetween('created_at',array(carbon::today()->subDays(2),carbon::tomorrow()))->get();
     return $countnewjobseeker = count($get_newjobseeker);

    }

    private function ShowEmployer(){
     $get_ShowEmployer = DB::table('employers')->get();
     return $countEmployer = count($get_ShowEmployer);

    }

    private function ShowTotaljob(){
     $get_ShowTotaljob = DB::table('jobs')->get();
     return $countShowTotaljob = count($get_ShowTotaljob);

    }

    private function ShowpendingJob(){
     $get_pendingJob = DB::table('jobs')->where('published',0)->get();
     return $countpendingJob = count($get_pendingJob);

    }

    private function ShowPublishedJob(){
     $get_PublishedJob = DB::table('jobs')->where('published',1)->get();
     return $countPublishedJob = count($get_PublishedJob);

    }


}
