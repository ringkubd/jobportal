<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class support extends Controller
{
    public function index()
    {
    	return view('public.contact');
    }


    //send message 
    public function sendSupportMessage(Request $request)
    {
    	switch ($request->action) {
    		case 'contract_us':
    		 $ticket ='guest'.rand(0, 100000);
    			DB::table('guest_support')->insert(
    			['email' => $request->email, 'subject' => $request->subject,'message' => $request->message,'name' => $request->name,'ticket' => $ticket]
				);
				return 'data insert';
    			break;
    		
    		default:
    			# code...
    			break;
    	}

    }
}
