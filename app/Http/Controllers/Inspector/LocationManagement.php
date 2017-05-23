<?php

namespace App\Http\Controllers\Inspector;
use Illuminate\Http\Request;
use App\country;
use App\division;
use App\district;
use App\area;
use App\Http\Controllers\Controller;

class LocationManagement extends Controller
{
    public function __construct()
    {
        $this->middleware('inspector');
    } 

//country part start........

    public function index(){
        $countries = country::paginate(10);
        return view('dashboard.managecountry',compact('countries'));
    }
    public function managecountry(Request $request){
     

        switch ($request->action) {
            case 'insertcountry':
                
                $item = new country;
                $item->name = $request->addcountry;
                $item->save();
                return 'Done';
                break;
            
            case 'updatecountry':
                $item = country::find($request->savecountryid);
                $item->name = $request->savecountry;
                $item->save();
                return $request->all();
                break;
                case 'deletecountry':
                country::where('id',$request->delcountryid)->delete();
                return $request->all();
                break;
        }
    }

    //search functionality start.......

    public function countrysearch(Request $request){
        if($request->ajax()){
            $searchResult='' ;
            $item_search = $request->search;
            $items = country::where('name','LIKE',$item_search.'%')->get();
            //return $item;
            if(count($items)==0){
                $searchResult .= 'No item found';
            }else{
                foreach ($items as $key => $value) {
                    
                    $searchResult.='<li class="list-group-item ouritem" id="allcategory" data-toggle="modal" data-target="#myModal">'.$value->name.'<input type="hidden" name="id" id="id" value="'.$value->id.'" />
                           
                      </li>';
                                     
                }
            }
            return response($searchResult);
        }

    }

//search functionality end.......


//country part start........


//division part start........

    public function divisionlist(){
        $divisions = division::paginate(10);
        return view('dashboard.managedivision',compact('divisions'));
    }


    public function managedivision(Request $request){
     
        switch ($request->action) {
            case 'insertdivision':
                
                $item = new division;
                $item->name = $request->divisionname;
                $item->country_id = $request->countryid;
                $item->save();
                return 'Done';
                break;
            
            case 'updatedivision':
                $item = division::find($request->savedivisionid);
                $item->name = $request->savedivision;
                $item->country_id = $request->countryid;
                $item->save();
                return $request->all();
                break;
                case 'deletedivision':
                
                division::where('id',$request->deldivisionid)->delete();
                return $request->all();
                break;
        }
    }


    //search functionality start.......

    public function divisionsearch(Request $request){
        if($request->ajax()){
            $searchResult='' ;
            $item_search = $request->search;
            $items = division::where('name','LIKE',$item_search.'%')->get();
            //return $item;
            if(count($items)==0){
                $searchResult .= 'No item found';
            }else{
                foreach ($items as $key => $value) {
                    
                    $searchResult.='<li class="list-group-item ouritem" id="allcategory" data-toggle="modal" data-target="#myModal">'.$value->name.'<input type="hidden" name="id" id="id" value="'.$value->id.'" />
                           
                      </li>';
                                     
                }
            }
            return response($searchResult);
        }

    }

//search functionality end.......



//division part end........

//district part start......    

    public function districtlist(){
        $districts = district::paginate(10);
        return view('dashboard.managedistrict',compact('districts'));
    }


    public function managedistrict(Request $request){
     
        switch ($request->action) {
            case 'insertdistrict':
                
                $item = new district;
                $item->name = $request->add_district;
                $item->country_id = $request->countryid;
                $item->division_id = $request->divistionid;
                $item->save();
                return 'Done';
                break;
            
            case 'updatedistrict':
                $item = district::find($request->savedistrictid);
                $item->name = $request->savedistrict;
                $item->country_id = $request->countryid;
                $item->division_id = $request->divistionid;
                $item->save();
                return $request->all();
                break;
                case 'deletedistrict':
                
                district::where('id',$request->deldistrictid)->delete();
                return $request->all();
                break;
        }
    }

    //search functionality start.......

    public function districtsearch(Request $request){
        if($request->ajax()){
            $searchResult='' ;
            $item_search = $request->search;
            $items = district::where('name','LIKE',$item_search.'%')->get();
            //return $item;
            if(count($items)==0){
                $searchResult .= 'No item found';
            }else{
                foreach ($items as $key => $value) {
                    
                    $searchResult.='<li class="list-group-item ouritem" id="allcategory" data-toggle="modal" data-target="#myModal">'.$value->name.'<input type="hidden" name="id" id="id" value="'.$value->id.'" />
                           
                      </li>';
                                     
                }
            }
            return response($searchResult);
        }

    }

//search functionality end.......

    

//district part end........


//area part start .......

    public function arealist(){
        $areas = area::paginate(10);
        return view('dashboard.managearea',compact('areas'));
    }


    public function managearea(Request $request){
     
        switch ($request->action) {
            case 'insertarea':
                
                $item = new area;
                $item->name = $request->addarea;
                $item->country_id = $request->countryid;
                $item->division_id = $request->divisionid;
                $item->district_id = $request->districtid;
                $item->save();
                return 'Done';
                break;
            
            case 'updatearea':
                $item = area::find($request->saveareaid);
                $item->name = $request->saveareaname;
                $item->country_id = $request->countryid;
                $item->division_id = $request->divisionid;
                $item->district_id = $request->districtid;
                $item->save();
                return $request->all();
                break;
                case 'deletearea':
                
                area::where('id',$request->delareaid)->delete();
                return $request->all();
                break;
        }
    }
    

    //search functionality start.......

    public function areasearch(Request $request){
        if($request->ajax()){
            $searchResult='' ;
            $item_search = $request->search;
            $items = area::where('name','LIKE',$item_search.'%')->get();
            //return $item;
            if(count($items)==0){
                $searchResult .= 'No item found';
            }else{
                foreach ($items as $key => $value) {
                    
                    $searchResult.='<li class="list-group-item ouritem" id="allcategory" data-toggle="modal" data-target="#myModal">'.$value->name.'<input type="hidden" name="id" id="id" value="'.$value->id.'" />
                           
                      </li>';
                                     
                }
            }
            return response($searchResult);
        }

    }

//search functionality end.......



//area part end.....

    
}