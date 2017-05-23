<?php

namespace App\Http\Controllers\Inspector;
use Illuminate\Http\Request;
use App\Frontpagetheme;
use DB;
use App\Http\Controllers\Controller;


class themeoptionController extends Controller
{	public function __construct()
    {
        $this->middleware('inspector');
    }
   public function index(){
   	$pages=DB::table('frontpagethemes')->orderBy('status', 'desc')->get();
   	return view('dashboard.manage_front_page_theme',compact('pages'));
   }

   //country part start........
    public function managetheme(Request $request){
     

        switch ($request->action) {
            case 'insertpage':
                $item = new Frontpagetheme;
                $item->pagename = $request->addpage;
                $item->save();
                return 'Done';
                break;
            
            case 'updatepage':
                $item = Frontpagetheme::find($request->savepageid);
                $item->pagename = $request->savepage;
                $item->save();
                return $request->all();
                break;
                case 'deletepage':
                Frontpagetheme::where('id',$request->deletepageid)->delete();
                return $request->all();
                break;
                case 'selectpage':
               
                DB::table('frontpagethemes')
	            ->where('id',$request->selectpageid)
	            ->update(['status' => 1]);
	            $this->updatepatestatus($request->selectpageid);
                break;
        }
    }

		    private function updatepatestatus($id){
		  	return $updateresult= DB::table('frontpagethemes')
            ->where('id', '!=', $id)
            ->update(['status' => '0']);
		    }
}
 
