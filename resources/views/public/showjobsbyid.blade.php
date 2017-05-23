@extends('public.layout.public_layout')
@section('page_title')
Search
@endsection
@section('style')
{!!Html::style('css/singleJob.css')!!}
@endsection
@section('script')
{{--asset('js/managejob.js')--}}
{!!Html::script('js/managejob.js')!!}
@endsection
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">
<div class="container">

@forelse($jobdata as $j)


<div class="row">
  <div class="col-xs-12" style="margin:15px 0; border:1px solid #ccc">   
     <div style="padding: 12px 0;">
        Updated at: <strong>{{$j->created_at}}</strong>
    </div>            
  </div>
</div>
<div class="row">
       <div class="col-md-12" style="border:1px solid #ccc">
      <div class="col-md-8 col-xs-12">
       

              <div class="row">
                  <div class="col-xs-3">
                   @if(isset($j->companylogo))
            
              {{Html::image('storage/company_logo/'.$j->companylogo,'companyLogo',array('style'=>'max-width:150px','class'=>'img img-responsive img-thumbnail'))}}
               @else
                {{Html::image('images/no-logo.png','companyLogo',array('style'=>'max-width:150px','class'=>'img img-responsive img-thumbnail'))}}
                @endif

            {{-- <img src="/storage/{{ $j->companylogo }}" class="" alt="Company Logo" />     --}}  

                 </div>
                  <div class="col-xs-9">
                        <h3>{{$j->jobtitle}}</h3>
                        <h4>
                            <a href="#">{{$j->companyname}}</a>
                        </h4>
                        <p>
                        <a class="hidden-print" href="/en/employer/selise-rockin-software.html">
                            <i class="icon-home"></i> View company profile (not worked yet!!!)</a>
                        </p>
                  </div>

               </div>
               <p>
                   Reference: <strong>JBAH8166095</strong><br/>
                   Application Deadline: <strong>{{$j->deadline}}</strong>
               </p>
               
            {!! $apply=="true" ? "<span class='btn btn-danger btn-block'>You already applied</span>" : "<a href='/jobseeker/apply/$j->id' class='btn btn-primary btn-block apply_now'>Apply now</a>"!!}
        <div class="col-xs-12">
            
          </div>



          <div class="row">
              <div class="col-md-12 col-xs-12">
                  <!-- job details -->
                            <div class="row">

                               
                              <div class="col-sm-6">
                                    <h4 class="dl-title">Job Details</h4>

                                    <div class="row">
                                       <div class="col-sm-6">
                                            <p>City:</p>
                                        </div>
                              
                                        <div class="col-sm-6">
                                                <p>Bangladesh</p>
                                        </div>

                                    </div>
                                    <div class="row">
                                       <div class="col-sm-6">
                                            <p>Job Location:</p>
                                        </div>
                                    
                                        <div class="col-sm-6">
                                             <p>{{$j->divname}}</p>
                                        </div>

                                    </div>
                                    <div class="row">
                                       <div class="col-sm-6">
                                            <p>Contract Type:</p>
                                        </div>
                                    
                                        <div class="col-sm-6">
                                            <p>{{$j->joblevel}}</p>
                                        </div>

                                    </div>
                                    <div class="row">
                                       <div class="col-sm-6">
                                            <p>Job category:</p>
                                        </div>
                                    
                                        <div class="col-sm-6">
                                           <p>{{$j->catagoryname}}</p>
                                        </div>

                                    </div>
                                    <div class="row">
                                       <div class="col-sm-6">
                                            <p>Salary:</p>
                                        </div>
                                    
                                        <div class="col-sm-6">
                                            <p>{{$j->salaryrange}}</p>
                                        </div>

                                    </div>

                              </div>
                            
                                <div class="col-sm-6">
                                    <h4 class="dl-title">Company Details</h4>

                                    <div class="row">
                                       <div class="col-sm-6">
                                            <p>Company industry:</p>
                                        </div>
                                  
                                        <div class="col-sm-6">
                                                <p>{{$j->industrytypename}}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-sm-6">
                                            <p>No. of Employees:</p>
                                        </div>
                                    
                                        <div class="col-sm-6">
                                                <p>51-100</p>
                                        </div>
                                    </div>


                                </div>


                            </div> 

                </div>
              </div>



              <div class="row">
                  <div class="col-md-12 col-xs-12">
                      <!-- job details -->
                                <div class="row">

                                   
                                  <div class="col-sm-6">
                                  <h4 class="dl-title">Preferred Candidate</h4>
                                  <div class="row">
                                     <div class="col-sm-6">
                                          <p>Career type:</p>
                                      </div>
                                      <div class="col-sm-6">
                                          <p>{{$j->jobtype}}</p> 
                                      </div>

                                    </div>
                                    <div class="row">
                                     <div class="col-sm-6">
                                          <p>Degree:</p>
                                      </div>
                                      <div class="col-sm-6">
                                         {{ $j->educational_qualification }}
                                      </div>

                                    </div>
                                    <div class="row">
                                     <div class="col-sm-6">
                                          <p>Minimum years of experience:</p>
                                      </div>
                                      <div class="col-sm-6">
                                          <p>{{ $j->job_experiences_year }}</p>
                                      </div>

                                    </div>

                                    </div>
                                
                                    <div class="col-sm-6">

                                    <h4 class="dl-title">Professional Skills</h4>
                                      <div class="row">
                                         <div class="col-sm-12">
                                              <p>{{ $j->job_experiences_field }}</p>
                                          </div>
                                      </div>

                                      <h4 class="dl-title">Language Skills</h4>
                                        <div class="row">
                                           <div class="col-sm-12">
                                                <p>bangla, english</p>
                                            </div>
                                        </div>


                                    </div>


                                </div> 

                    </div>
                  </div>

                  
                 <h4 class="dl-title">Job Description</h4>                             
                 <div class="row">
                  <div class="col-md-12 col-xs-12">
                      <p>{{ $j->job_description }} not worked</p>
                  </div>
                  </div>

                  <h4 class="dl-title">Position Requirements</h4>                          
                  <div class="row">
                   <div class="col-md-12 col-xs-12">
                       <p></p>
                   </div>
                   </div>

                   <h4 class="dl-title">Educational Requirements:</h4>                             
                   <div class="row">
                    <div class="col-md-12 col-xs-12">
                        <p>{{ $j->educational_qualification }}</p>
                    </div>
                    </div>

                <div class="row">
                    <!-- about company -->
                    <div class="col-xs-12">
                        <h4 class="dl-title">About the Company</h4>
                        <div class="divider"></div>
                        <div class="dl-horizontal">
                            <p>SELISE’s value proposition revolves around consumer-centric cloud and mobile solutions in Financial Services, Smart Government, Telecommunication, Entertainment and others. The philosophy of constant knowledge creation and sharing makes the organization a valuable contributor to the global tech and startup community. The company’s creative forces are distributed across Zürich, Dhaka, Thimphu and Dubai, delivering to eight countries spread across three continents. For companies who aim to prevail in the post digital age, SELISE’s intelligent applications will provide a seamless digital interface to their end consumers. Different from traditional software firms who start to work once requirements are ready, SELISE understands business and begins at the strategic level.</p>                                    </div>
                    </div>
                    <!-- #about company -->
                </div>                            
                                          



{{--                                     <div class="row">
                                        <!-- job description -->
                                        <div class="col-xs-12">
                                            
                                            <div class="divider"></div>
                                            <div class="dl-horizontal">
                                                <p class="h4">Job Context:</p>
        
        <p class="h4">Responsibility:</p>
        <p>{{ $j->job_responsibilities }}</p>
        <p class="h4">Salary Range:</p>
        <p>{{$j->salaryrange}}</p>
        <p></p>                                    </div>
                                        </div>
                                        <!-- job description -->
                                    </div>

                                    <div class="row">
                                        <!-- required skills -->
                                        <div class="col-xs-12">
                                            <h4 class="h4">Position Requirements</h4>
                                            <div class="divider"></div>
                                            <div class="dl-horizontal">
                                                <h2><strong>Educational Requirements:</strong></h2>
        <ul>{{ $j->educational_qualification }}</ul>
        <p>Experience Requirements:</p>
        <ul>
        <li>{{ $j->job_experiences_year }}</li>
        <li>The applicants should have experience in the following area(s):Web Developer/Web Designer</li>
        </ul>
        <p>Job Requirements:</p>
        <ul>
        <li>You have a plus point if you are:</li>
        <li>{{ $j->job_experiences_year }}</li>
        </ul>                                    </div>
                                        </div>
                                        <!-- #required skills -->
                                    </div>

                                    <div class="row">
                                        <!-- about company -->
                                        <div class="col-xs-12">
                                            <h4 class="h4">About the Company</h4>
                                            <div class="divider"></div>
                                            <div class="dl-horizontal">
                                                <p>SELISE’s value proposition revolves around consumer-centric cloud and mobile solutions in Financial Services, Smart Government, Telecommunication, Entertainment and others. The philosophy of constant knowledge creation and sharing makes the organization a valuable contributor to the global tech and startup community. The company’s creative forces are distributed across Zürich, Dhaka, Thimphu and Dubai, delivering to eight countries spread across three continents. For companies who aim to prevail in the post digital age, SELISE’s intelligent applications will provide a seamless digital interface to their end consumers. Different from traditional software firms who start to work once requirements are ready, SELISE understands business and begins at the strategic level.</p>                                    </div>
                                        </div>
                                        <!-- #about company --> --}}




        </div>


        <div class="col-md-4 hidden-sm hidden-xs">
          <div class="similar-jobs mt-15">
          <div class="similar-jobs__header bg-primary" style="text-transform: uppercase; padding: 15px;">Similar Jobs</div>
          <div class="similar-jobs__content">
           @forelse($relatedJobs as $related)
              <div class="js-similar-jobs" data-source="/en/job/similar/66095/" data-items="10">
              <div class="similar-job js-similar-job" style="padding: 20px;">
              <div class="l-similar-job">
              <div class="l-similar-job__left">
              <span class="js-similar-job-img">
              <a href="/en/job/show/64745/" title="{{$related->jobtitle}}">
              @if(isset($related->clogo))
            
              {{Html::image('storage/company_logo/'.$related->clogo,'companyLogo',array('height'=>'50px','width'=>'50px','class'=>"similar-job__company-img"))}}
               @else
                {{Html::image('images/no-logo.png','companyLogo',array('height'=>'50px','width'=>'50px','class'=>"similar-job__company-img"))}}
                @endif
              </a>
              </span>
              </div>
              <div class="l-similar-job__right">
              <span class="js-similar-job-title">
              <a class="similar-job__title" href="{{url('showdetails/'.$related->id)}}" title="{{$related->jobtitle}}">{{$related->jobtitle}}</a>
              </span>
              <span class="similar-job__location js-similar-job-location" href="#">{{$related->divname}}</span>
              <span class="similar-job__date js-similar-job-expiration-date" href="#">{{$related->deadline}}</span>
              </div>
              </div>
              </div>
              </div>

            @empty
            <h4>NO related Jobs found</h4>
            @endforelse

            @if(count($relatedJobs)>10)
            <div class="similar-jobs__btn-wrapper">
              
              <form action={{url('relatedJobs')}} id="relatedform">
                <input type="hidden" name="rid" value="@if(isset($related->id)){{$related->id}} @endif">
                <input type="hidden" name="rtitle" value="{{$jobdata[0]->jobtitle}}">
                <input type="hidden" name="sortby" value="{{$jobdata[0]->jobtitle}}">
                <a style="cursor:pointer"class="rsubmit">See more jobs</a>
              </form>

            </div>
            @endif

          </div>
          </div>
        </div>


      
        <div class="row">
        <div class="col-xs-12" style="border-top: 1px solid #ccc; padding: 10px;">
        <a class="pull-left btn btn-default fa fa-print" data-position="bottom">
        <i class="icon icon-print"></i>
        </a>
        <div class="pull-left text-center apply-wrapper">
 
        {!! $apply=="true" ? "<span class='btn btn-danger btn-block'>You already applied</span>" : "<a href='/jobseeker/apply/$j->id' class='btn btn-primary btn-block apply_now'>Apply now</a>"!!}
        <br>
        </div>
        </div>
        </div>
      
      </div>

         
     </div>

     <!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Expected Sallary</h4>
      </div>
      <div class="modal-body">
        <form action="{{url('jobseeker/apply')}}">
          <input type="hidden" name="jobid" value="{{$j->id}}">
          <input type="hidden" name="employerid" value="{{$j->employer_id}}">
          <div class="form-group">
            <input type="text" name="expected_sallary" class="form-control" placeholder="Your Expected Sallary">
          </div>
          <div class="form-group">
            <input type="submit" class="btn btn-primary btn-block" value="Apply">
          </div>

        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

@empty

@endforelse
</div>
@endsection
  
