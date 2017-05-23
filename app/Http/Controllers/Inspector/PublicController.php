<?php

namespace App\Http\Controllers\Inspector;

use Illuminate\Http\Request;
use DB;
use App\Http\Controllers\Controller;

class PublicController extends Controller
{
    public function __construct()
    {
        $this->middleware('inspector');
    } 
    public function public_option()
    {
    	// get all option
    	$portal_option = DB::table('public_options')
    	->where('status','1')
    	->pluck('option_value','option_name')
    	->all();
    	
    	return view('public.public',compact('portal_option'));
    }
}
