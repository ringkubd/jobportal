<?php

namespace App\Http\Controllers\Inspector;

use Illuminate\Http\Request;
use App\levelofeducation;
use App\examTitle;
use App\groupoormajors;
use App\Http\Controllers\Controller;
class Manageeducationcontroller extends Controller
{
    public function __construct()
    {
        $this->middleware('inspector');
    } 
   //lavelof education part start........

    public function index(){
        $lavelofeducations = levelofeducation::all();
        return view('dashboard.manageeducationlavel',compact('lavelofeducations'));
    }
    public function managelevelofeducation(Request $request){
     

        switch ($request->action) {
            case 'inserteducationlavel':
                $item = new levelofeducation;
                $item->edulavelname= $request->addeducationlavel;
                $item->save();
                return 'Done';
                return $request->all();
                break;
	            
            case 'updatelevel':
                $item = levelofeducation::find($request->savelevelid);
                $item->edulavelname = $request->savelevel;
                $item->save();
                return $request->all();
                break;

            case 'deletelevel':
                levelofeducation::where('id',$request->dellevelid)->delete();
                return $request->all();
                break;
        }
    }


        //search functionality start.......

    public function manedusearch(Request $request){
        if($request->ajax()){
            $searchResult='' ;
            $item_search = $request->search;
            $items = levelofeducation::where('edulavelname','LIKE',$item_search.'%')->get();
            //return $item;
            if(count($items)==0){
                $searchResult .= 'No item found';
            }else{
                foreach ($items as $key => $value) {
                    
                    $searchResult.='<li class="list-group-item ouritem" id="allcategory" data-toggle="modal" data-target="#myModal">'.$value->edulavelname.'<input type="hidden" name="id" id="id" value="'.$value->id.'" />
                           
                      </li>';
                                     
                }
            }
            return response($searchResult);
        }

    }

//search functionality end.......



//level part end........


//examtitle part start........

    public function examtitlelist(){
        $examtitles = examTitle::paginate(10);
        return view('dashboard.manageexamtitle',compact('examtitles'));
    }


    public function manageexam(Request $request){
     
        switch ($request->action) {
            case 'insertexamtitle':
                
                $item = new examTitle;
                $item->name = $request->examtitlename;
                $item->levelofeducation_id = $request->levelofeducationid;
                $item->save();
                return 'Done';
                break;
            
            case 'updateexamtitle':
                $item = examTitle::find($request->saveexamtitleid);
                $item->name = $request->saveexamtitle;
                $item->levelofeducation_id = $request->levelofeducationid;
                $item->save();
                return $request->all();
                break;
                case 'deleteexamtitle':
                
                examTitle::where('id',$request->delexamtitleid)->delete();
                return $request->all();
                break;
        }
    }


    //search functionality start.......

    public function examtitlesearch(Request $request){
        if($request->ajax()){
            $searchResult='' ;
            $item_search = $request->search;
            $items = examTitle::where('name','LIKE',$item_search.'%')->get();
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



//examtitle part end........
//groupormajor part start......    

    public function groupormajorlist(){
        $groupoormajors = groupoormajors::paginate(10);
        return view('dashboard.managegroupormajor',compact('groupoormajors'));
    }


    public function managegroupormajor(Request $request){
     
        switch ($request->action) {
            case 'insertgroupormejor':                
                $item = new groupoormajors;
                $item->groupname = $request->add_groupormejor;
                $item->levelofeducation_id = $request->levelofeducation_id;
                $item->exam_title_id = $request->exam_title_id;
                $item->save();
                return 'Done';
                break;
            
            case 'updategroupormejor':
                $item = groupoormajors::find($request->savegroupormejorid);
                $item->groupname = $request->savegroupormejor;
                $item->levelofeducation_id = $request->levelofeducation_id;
                $item->exam_title_id = $request->exam_title_id;
                $item->save();
                return $request->all();
                break;
            case 'deletegroupormejor':
                
                groupoormajors::where('id',$request->delgroupormejorid)->delete();
                return $request->all();
                break;
        }
    }

//groupormajor part end........


    //search functionality start.......

    public function groupormajorsearch(Request $request){
        if($request->ajax()){
            $searchResult='' ;
            $item_search = $request->search;
            $items = groupoormajors::where('groupname','LIKE',$item_search.'%')->get();
            //return $item;
            if(count($items)==0){
                $searchResult .= 'No item found';
            }else{
                foreach ($items as $key => $value) {
                    
                    $searchResult.='<li class="list-group-item ouritem" id="allcategory" data-toggle="modal" data-target="#myModal">'.$value->groupname.'<input type="hidden" name="id" id="id" value="'.$value->id.'" />
                           
                      </li>';
                                     
                }
            }
            return response($searchResult);
        }

    }
    

//search functionality end.......


}
