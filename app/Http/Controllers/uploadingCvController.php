<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cv;
use Auth;
use File;
use Illuminate\Support\Facades\Storage;
use Response;
use DB;

class uploadingCvController extends Controller
{
	public function __construct()
	{
		$this->middleware('jobseeker');
	}



	//loading cv upload page
    public function uploadingPage()
    {
    	// jobseeker id
    	$jobseeker_id 	=  Auth::guard('jobseeker')->user()->id;


    	$cvObject 		= $this->retriveCv($jobseeker_id);
    	$cv = !$cvObject?'no':$cvObject[0];
    	 
    	return view('jobseeker.uploadingCv',compact('cv'));
    }



    //uploading cv
    public function cvUpload(Request $request)
    {
    	switch ($request->action) {
    		case 'jobseeker_cv':
    			$ida = Auth::guard('jobseeker')->user()->id;

		        $file = $request->file('inputCv');

		        $extension=$request->inputCv->extension();
		        $size = file::size($file)/1024;
		        if ($extension=='doc' || $extension=='pdf' && $size<500) {
		        	$unique_image=$ida.".".$extension;
				    $request->inputCv->storeAs('/public/cv/',$unique_image);
				    $cvStore = DB::table('cvs')->insert(['jobseeker_id'=>$ida,'cv_name'=>$unique_image]);
				    return 'Cv upload Succesfully';
		        }else{
		        	return 'false';
		        }
		        
    			
    			break;
    		
    		default:
    			# code...
    			break;
    	}
    }

    //view uploaded cv

    public function showuploadedcv()
    {
    	$ida = Auth::guard('jobseeker')->user()->id;
    	$filename = cv::where('jobseeker_id',$ida)->pluck('cv_name');
    	$file='storage/cv/'.$filename[0];
    	if (File::isFile($file))
		{
		    $file = File::get($file);
		    $response = Response::make($file, 200);
		    // using this will allow you to do some checks on it (if pdf/docx/doc/xls/xlsx)
		    $response->header('Content-Type', 'application/pdf');

		    return $response;
		}else{
			dump('no');
		}

		// Or to download

		// if (File::isFile($file))
		// {
		//     return Response::download($file, $file_name);
		// }
// 		$content_types = [
//     'application/octet-stream', // txt etc
//     'application/msword', // doc
//     'application/vnd.openxmlformats-officedocument.wordprocessingml.document', //docx
//     'application/vnd.ms-excel', // xls
//     'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', // xlsx
//     'application/pdf', // pdf
// ];
    }

    public function createDoc(){
    	// Creating the new document...
		$phpWord = new \PhpOffice\PhpWord\PhpWord();

		/* Note: any element you append to a document must reside inside of a Section. */

		 // Adding an empty Section to the document...
		$section = $phpWord->addSection();

		// Adding Text element to the Section having font styled by default...
		$section->addText(('ABCD'));

		$section = $phpWord->addSection();
		$section->addText(('<h2><abcd>HAHAHAHAHA</abcd></h2>'));

		// Saving the document as HTML file...
		$objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'HTML');
		$objWriter->save('abcd.html');
    }

    //retrive cv
    private function retriveCv($jobseeker_id)
    {
    	$cvObject = DB::table('cvs')->where('jobseeker_id',$jobseeker_id)->get();
    	if (count($cvObject)>0) {
    		return $cvObject;
    	}else{
    		return false;
    	}
    }
}
