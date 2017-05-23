<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employer;
use App\Jobseeker;
use App\Inspector;
use Auth;
use Carbon\Carbon;

class IsOnlineController extends Controller
{
    public function IsOnline(Request $request)
    {
    	if ($request->ajax == 'AJAX') {
    		
    	switch ($request->action) {
    		case 'jobseeker':
    			if (Auth::guard('jobseeker')->check()) {
    				$id = Auth::guard('jobseeker')->user()->id;
    				Jobseeker::where('id',$id)->update(['online_status'=>Carbon::today()->now()]);
    			}
    			break;
			case 'employer':
				if (Auth::guard('employer')->check()) {
    				$id = Auth::guard('employer')->user()->id;
    				Employer::where('id',$id)->update(['online_status'=>Carbon::today()->now()]);
    			}
				break;
			case 'inspector':
				if (Auth::guard('inspector')->check()) {
    				$id = Auth::guard('inspector')->user()->id;
    				Inspector::where('id',$id)->update(['online_status'=>Carbon::today()->now()]);
    			}
				break;
    		
    		default:
    			# code...
    			break;
    	}
    }else{
    	return FALSE;
    }
    }
    // check all online user 

    public function checkAllonlineUser(Request $request)
    {
    	if ($request->ajax == 'AJAX') {
    		switch ($request->action) {
    			case 'jobseeker':
    				$onlineJobseeker = Jobseeker::where('online_status', '>', Carbon::now()->subMinutes(5)->toDateTimeString())->count();
    				return $onlineJobseeker;
    				break;
				case 'employer':
					$onlineEmployer = Employer::where('online_status', '>', Carbon::now()->subMinutes(5)->toDateTimeString())->count();
    				return $onlineEmployer;
					break;
				case 'inspector':
					$onlineInspector = Inspector::where('online_status', '>', Carbon::now()->subMinutes(5)->toDateTimeString())->count();
    				return $onlineInspector;
					break;
    			
    			default:
    				# code...
    				break;
    		}
    	}
    }
}
