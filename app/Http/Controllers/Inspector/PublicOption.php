<?php

namespace App\Http\Controllers\Inspector;

use Illuminate\Http\Request;
use DB;
use App\Http\Controllers\Controller;

class PublicOption extends Controller
{
	public function __construct()
    {
        $this->middleware('inspector');
    } 
    public function publicoption(){
    	$allpublicoptions = DB::table('public_options')->get();
    	return view('dashboard.publicoption', compact('allpublicoptions'));

    }
}
