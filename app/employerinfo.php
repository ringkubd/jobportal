<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\country;
use App\division;
use App\district;
use App\area;
use App\empprofile;
class employerinfo extends Controller
{
    public function __construct()
    {
        $this->middleware('employer');
    } 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $country=(country::pluck('name','id'));
       $division=(division::pluck('name','id'));
       $district=(district::pluck('name','id'));
       $area=(area::pluck('name','id'));

       return view('employer.resume');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
       $data=empprofile::join('countries','empprofiles.country','countries.id')->join('divisions','empprofiles.division','divisions.id')->join('districts','empprofiles.district','districts.id')->join('areas','empprofiles.area','areas.id')->select('empprofiles.*','countries.name As cname','divisions.name As dname','districts.name As disname','areas.name As aname')->where('empprofiles.employer_id',$id or 'empprofiles.slug',$id)->get();
       $empdes = $data[0];
      //return $empdes = $data[0];

       $country=(country::pluck('name','id'));
       $division=(division::pluck('name','id'));
       $district=(district::pluck('name','id'));
       $area=(area::pluck('name','id'));

      return view('employer.resume',compact('empdes','country','division','district','area'));
       //return $empdes;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {  
        if($request->ajax())
        {
            $frff = empprofile::where('employer_id',$id)->get();
            $empprofile=$frff[0];
            //$empprofile = empprofile::find($id);
            //return $empprofile[0];
            


            switch ($request->action) {
                case 'companyinfo':
                    $empprofile->companyname = $request->companyname;
                    $empprofile->altcompanyname = $request->altcompanyname;
                    $empprofile->contactperson = $request->contactperson;
                    $empprofile->designation = $request->designation;
                    $empprofile->save();
                    break;
                
                case 'industrytype':
                $industrytype=explode(',',$request->industrytype);
                return $request->industrytype;
                    
                    break;
                
                case 'primaryaddress':
                    # code...
                    break;
                
                default:
                    return "Woofs";
                    break;
            }

        }
        
        $empprofile->companyname = $request->companyname;

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function updateorcreate(request $r,$id){
         //empprofile::updateOrCreate(['id'=>2,'employer_id'=>$id,'companyname'=>'emon']);
       return "success";
    }
}