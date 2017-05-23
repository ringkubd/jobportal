<?php
//this controller will be access for admin to viw about employer
namespace App\Http\Controllers\Inspector;

use Illuminate\Http\Request;
use App\empprofile;
use App\Employer;
use App\country;
use App\division;
use App\district;
use App\area;
use DB;
use App\Http\Controllers\Controller;
class EmployerCon extends Controller
{
    public function __construct()
    {
        $this->middleware('inspector');
    } 


public function index(){
    	$employers = Employer::all();
    	//return $employers;
    	return view('dashboard.employer', compact('employers'));
    }

    public function manageemployer(Request $request){
     
        switch ($request->action) {
            case 'insertemployer':
                
                $item = new Employer;
                $item->name = $request->employer_name;
                $item->email = $request->employer_email;
                $item->slug = $request->employer_slug;
                $item->password =bcrypt($request->employer_password);
                $item->save();
                break;
            
            case 'updateemployer':
                $item = Employer::find($request->employerid);
                $item->name = $request->employername;
                $item->email = $request->employeremail;
                $item->slug = $request->employerslug;
                $item->save();
                return $request->all();
                break;

                case 'deleteemployer':
                Employer::where('id',$request->employerdelid)->delete();
                return $request->all();
                break;


                case 'rejectemployer':
                $item = Employer::find($request->employerrejectid);
                $item->status ='0';
                $item->save();
                return $request->all();
                break;


                case 'approvedemployer':
                $item = Employer::find($request->approveemployerid);
                $item->status ='1';
                $item->save();
                return $request->all();
                break;
//view employer profile start
                 case 'viewemployerprofile':
                 $data = empprofile::where('employer_id',$request->viewemployerid)->get();
            //return dump($data[0]->country);
            if ($data[0]->division && $data[0]->country && $data[0]->district) {
                $empdeses=empprofile::join('countries','empprofiles.country','countries.id')->join('divisions','empprofiles.division','divisions.id')->join('areas','empprofiles.area','areas.id')->join('districts','empprofiles.district','districts.id')->join('employers', 'empprofiles.employer_id','employers.id')->select('empprofiles.*','countries.name As cname','divisions.name As dname','districts.name As disname','areas.name As aname', 'employers.name as username','employers.email as useremail')->where('empprofiles.employer_id',$request->viewemployerid)->get();
                return $empdeses; 
            }
            elseif ($data[0]->division && $data[0]->country) {
                 $empdeses=empprofile::join('countries','empprofiles.country','countries.id')->join('divisions','empprofiles.division','divisions.id')->join('employers', 'empprofiles.employer_id','employers.id')->select('empprofiles.*','countries.name As cname','divisions.name As dname','districts.name As disname', 'employers.name as username','employers.email as useremail')->where('empprofiles.employer_id',$request->viewemployerid)->get();
                 return $empdeses; 
            }
            elseif($data[0]->country) {
                $empdeses=empprofile::join('countries','empprofiles.country','countries.id')->join('employers', 'empprofiles.employer_id','employers.id')->select('empprofiles.*','countries.name As cname', 'employers.name as username','employers.email as useremail')->where('empprofiles.employer_id',$request->viewemployerid)->get();
                return $empdeses; 
            }
            elseif(empprofile::where('employer_id',$request->viewemployerid)->get()){
                   
                    return $empdeses =empprofile::join('employers', 'empprofiles.employer_id','employers.id')->select('empprofiles.*', 'employers.name as username','employers.email as useremail')->where('empprofiles.employer_id',$request->viewemployerid)->get();
                }else{
                    return "somethis wrong";
                }
            

        }
 //view employer profile end       
    }


            //search functionality start.......

        public function employersearch(Request $request){
            if($request->ajax()){
                $searchResult='' ;
                $i=1;
                $item_search = $request->search;
                $items = Employer::where('name','LIKE',$item_search.'%')->orwhere('email','LIKE',$item_search.'%')->get();

                //return $item;
                $approved_status="";
                if(count($items)==0){
                    $searchResult .= 'No item found';
                }else{
                    foreach ($items as $key => $value) {
                        $status = $this->check_employer_status($value->id)==0? "Approved":"Reject";
                         $statusattr = $this->check_employer_status($value->id)==0? "data-approved":"data-reject";
                         $statusclass = $this->check_employer_status($value->id)==0? "approvedemployer":"rejectemployer";
                         $btnclass = $this->check_employer_status($value->id)==0? "btn-success":"btn-warning";
                        $searchResult.='<tr class="odd gradeX all_data">
                                    <td>'.$i++.'</td>
                                    <td class="employer_name">'.$value->name.'</td>
                                    <td class="employer_email">'.$value->email.'</td>
                                    <td><a class="btn btn-danger btn-sm  total_job_post" data-viewpostjob="'.$value->id.'" href="/inspector/view_posted_job/'.$value->id.'" target="_blank">post job</a><a class="btn btn-info btn-sm  total_job_published" data-viewpublishedjob="'.$value->id.'" href="/inspector/view_published_job/'.$value->id.'" target="_blank">Published job</a><a class="btn btn-success btn-sm  total_job_trashed" data-viewtrashedjob="'.$value->id.'" href="/inspector/view_trashed_job/'.$value->id.'" target="_blank">Trashed job</a></td>

                                    <td><button class="btn btn-primary btn-sm editproduct editbtn"  data-toggle="modal" data-target="#myModal" data-edit="'.$value->id.'"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button><button class="btn btn-danger btn-sm delemployer" data-delid="'.$value->id.'"><i class="fa fa-trash-o" aria-hidden="true"></i></button></td>

                                    <td><button class="btn '.$btnclass.' btn-sm '.$statusclass.'"'.$statusattr.'="'.$value->id.'">'.$status.'</button><button class="btn btn-default btn-sm viewemployer"  data-toggle="modal" data-target="#emp_profile" data-viewemployer="'.$value->id.'">View</button></td>
                                    

                                </tr>';
                                //return $value->id;


                                

                                         
                    }
                }
                return response($searchResult);

            }
            //return 'yes';

        }

    //search functionality end.......

protected function check_employer_status($user_id)
{
    $approved_status = DB::table('employers')->where('id',$user_id)->where('status','1')->get();
    if(count($approved_status)>0){
        return TRUE;
    }else{
        return FALSE;
    }
}



}
