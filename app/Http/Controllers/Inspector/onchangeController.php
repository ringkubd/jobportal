<?php

namespace App\Http\Controllers\Inspector;

use Illuminate\Http\Request;
use App\country;
use App\division;
use App\district;
use App\area;

use App\levelofeducation;
use App\examTitle;
use App\groupoormajor;
use App\Http\Controllers\Controller;

//on change controller here you can practice the use of combo box
class onchangeController extends Controller
{
    public function __construct()
    {
        $this->middleware('inspector');
    } 
    
    public function showcountry(Request $request){
        switch ($request->action) {
            case 'showcountry':
                $country=country::all();
                return response()->json($country);
                break;
            case 'showdivision':
                $division=division::select('name','id')->where('country_id',$request->id)->take(10)->get();
                return response()->json($division);
                break;
            case 'showdistrict':
                $district=district::select('name','id')->where('division_id',$request->id)->take(20)->get();
                return response()->json($district);
                break;
            case 'showarea':
                $area=area::select('name','id')->where('district_id',$request->id)->take(200)->get();
                return response()->json($area);
                break;
            default:
               return 'misti';
                break;
        }
        
    }


    public function showlevelofeducation(Request $request){
        switch ($request->action) {
            case 'showlevelofeducation':
                $levelofeducation=levelofeducation::all();
                return response()->json($levelofeducation);
                break;
            case 'showexamtitle':
                $examtitle=examTitle::select('name','id')->where('levelofeducation_id',$request->id)->take(10)->get();
                return response()->json($examtitle);
                break;
           
            default:
               return 'misti';
                break;
        }
        
    }

}
