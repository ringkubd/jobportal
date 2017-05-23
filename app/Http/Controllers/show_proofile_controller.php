<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\country;
use App\division;
use App\district;
use App\area;
use App\empprofile;
use Auth;
use App\catagory;
use App\job;
use App\industrytype;
use Storage;

class show_proofile_controller extends Controller
{

    public function __construct()
    {
        $this->middleware('employer');
    } 


    public function showdata(){
    	$ida = Auth::guard('employer')->user()->id;
	  	$data=empprofile::join('countries','empprofiles.country','countries.id')->join('divisions','empprofiles.division','divisions.id')->join('districts','empprofiles.district','districts.id')->join('areas','empprofiles.area','areas.id')->select('empprofiles.*','countries.name As cname','divisions.name As dname','districts.name As disname','areas.name As aname')->where('empprofiles.employer_id',$ida)->get();
		       //return $empdes = $id;
		      $empdes = $data[0];
		      return view('employer/resume',compact('empdes'));

		    }
public function getimage(Request $request){
        $ida = Auth::guard('employer')->user()->id;
        $frff = empprofile::where('employer_id',$ida)->get();
        $empprofile=$frff[0];

        $request->file('image');

        $extension=$request->image->extension();
        $curent_time=md5(time());
        $unique_image=$curent_time.".".$extension;
        if($empprofile->companylogo)
       {
           storage::delete('public/company_logo/'.$empprofile->companylogo);
      
        }
        

      $request->image->storeAs('/public/company_logo',$unique_image);
      $empprofile->companylogo = $unique_image;
      $empprofile->save();



}


}
