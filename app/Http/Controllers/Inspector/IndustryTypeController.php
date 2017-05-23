<?php
namespace App\Http\Controllers\Inspector;
use Illuminate\Http\Request;
use App\industrytype;
use App\Http\Controllers\Controller;
class IndustryTypeController extends Controller
{
    public function __construct()
    {
        $this->middleware('inspector');
    } 
    public function index(){
    	$industry = industrytype::paginate(10);
    	return view('dashboard.industrytype', compact('industry'));
    }

    public function manageindustrytype(Request $request){
    switch ($request->action) {
        case 'insertindustrytype':            
            $item = new industrytype;
            $item->industrytypename = $request->addindustrytype;
            $item->save();
            return 'Done';
            break;        
        case 'updateindustrytype':
            $item = industrytype::find($request->savecindustrytypeid);
            $item->industrytypename = $request->saveindustrytype;
            $item->save();
            return $request->all();
            break;
        case 'deleteindustrytype':
            industrytype::where('id',$request->industrytypeid)->delete();
            return $request->all();
            break;
        }
    }


//search functionality start.......

    public function industrysearch(Request $request){
        if($request->ajax()){
            $searchResult='' ;
            $item_search = $request->search;
            $items = industrytype::where('industrytypename','LIKE',$item_search.'%')->get();
            //return $item;
            if(count($items)==0){
                $searchResult .= 'No item found';
            }else{
                foreach ($items as $key => $value) {
                    
                    $searchResult.='<li class="list-group-item ouritem" id="allcategory" data-toggle="modal" data-target="#myModal">'.$value->industrytypename.'<input type="hidden" name="id" id="id" value="'.$value->id.'" />
                           
                      </li>';
                                     
                }
            }
            return response($searchResult);
        }

    }

//search functionality end.......




}
