<?php

namespace App\Http\Controllers\Inspector;

use Illuminate\Http\Request;
use App\catagory;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('inspector');
    } 
    public function index(Request $request){
        $catagories = catagory::paginate(10);
        return view('dashboard.category', compact('catagories'));
    }

    public function managecategory(Request $request){

        switch ($request->action) {
            case 'insertcategory':
            $item = new catagory;
            $item->catagoryname = $request->addcategory;
            $item->save();
            return 'Done';
            break;
            case 'deletecategory':
            catagory::where('id',$request->categorydelid)->delete();
            return $request->all();
            break;
            case 'updatecategory':
            $item = catagory::find($request->savecategoryid);
            $item->catagoryname = $request->savecategory;
            $item->save();
            return $request->all();
            break;          
        }

    }

//search functionality start.......

    public function catsearch(Request $request){
        if($request->ajax()){
            $searchResult='' ;
            $item_search = $request->search;
            $items = catagory::where('catagoryname','LIKE',$item_search.'%')->get();
            //return $item;
            if(count($items)==0){
                $searchResult .= 'No item found';
            }else{
                foreach ($items as $key => $value) {
                    
                    $searchResult.='<li class="list-group-item ouritem" id="allcategory" data-toggle="modal" data-target="#myModal">'.$value->catagoryname.'<input type="hidden" name="id" id="id" value="'.$value->id.'" />
                           
                      </li>';
                                     
                }
            }
            return response($searchResult);
        }

    }

//search functionality end.......


}