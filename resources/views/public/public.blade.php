{{-- Header --}}
@extends('public.layout.public_layout')
@section('page_title')
HomePage
@endsection
<style type="text/css">
    .jobitems{
        margin-top: 15px;
    }
    .tab-manu .nav-tabs {
      border: 1px solid transparent;
      float: right;
      margin-top: 10px;
    }
    .job-ad-item {
  border: 1px solid #f3f3f3;
  border-radius: 2px;
  margin: 18px 0;
  overflow: hidden;
  padding: 15px;
  position: relative;
}
.job-ad-item .item-image {
  border: 1px solid #f3f3f3;
  height: 85px;
  overflow: hidden;
  width: 95px;
  padding: 10px;
}
.img-responsive, .thumbnail > img, .thumbnail a > img, .carousel-inner > .item > img, .carousel-inner > .item > a > img {
  min-height: 100%;
}
.item-image-box {
  float: left;
}
.ad-info {
    float: left;
    padding: 5px 25px;
}
.ad-info span a{
    text-decoration: none;
}
.ad-info a:hover{
    color:green;
}
.job-ad-item .ad-info span {
  color: #000;
  display: block;
  font-size: 20px;
  margin-bottom: 10px;
}
.ad-info span .title {
  font-weight: bold;
}
.job-ad-item .button {
  float: right;
}
.job-ad-item .ad-meta {
  background-color: transparent;
  border-top: medium none;
  display: inline;
  min-height: inherit;
  padding-left: 0;
  position: inherit;
}
.job-ad-item .ad-meta i, .job-ad-item .ad-meta a i {
  font-size: 20px;
  margin-right: 10px;
}
.ad-meta > ul {
  padding: 0;
}
.ad-meta li {
  display: inline;
}




.job-category-items {
  margin-top: 55px;
}
.category-list {
  list-style: outside none none;
  margin: 0;
  padding: 0;
}
.job-category-items .category-list li {
  float: left;
  min-height: 125px;
  width: 23.6%;
}
.section.category-items.job-category-items.text-center {
  max-height: 200px;
  overflow: auto;
}
@media (max-width: 768px) {
    .job-category-items .category-list li {
      float: left;
      min-height: 125px;
      width: 30.6%;
    }
}

@media (max-width: 480px) {
  .job-category-items .category-list li {
      float: left;
      min-height: 125px;
      width: 45.6%;
    }

}

.list-inline.job-seeker img {
  min-width: 168px;
  max-height: 150px;
}


</style>
@section('content')
<meta name="csrf-token" content="{!! csrf_token() !!}">
{{-- Slider Part --}}
        @include('public.layout.slider')
{{--End Slider Part --}}
 <br>
        <div class="content-area">

            <div class="container wow swing center" data-wow-delay="1s">
                <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="panel-title"><h3>Category</h3></div>
                </div>
                <div class="panel-body">
                <div class="section category-items job-category-items  text-center">
                    <ul class="category-list">
                    @foreach($get_cats as $category)    
                        <li class="category-item">
                            <a @if($catagorysWiseJobcount[$category->id] == 0)  style = "pointer-events: none;"" @endif href="{{url('category/').'/'.$category->id}}"> <span><i class="fa fa-university fa-2x" aria-hidden="true"></i></span><br>
                                <span class="category-title">{{$category->catagoryname}}</span><br>
                                <span class="category-quantity">({{ $catagorysWiseJobcount[$category->id] }})</span>
                            </a>
                        </li><!-- category-item -->
                    @endforeach
                                
                    </ul>

                            
                </div><!-- category ad -->
                </div>
                </div> 
            </div>



            <div class="container">
                <div class="row page-title text-center wow zoomInDown" data-wow-delay="1s">
                    <h5>Our Process</h5>
                    <h2>How we work for you?</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae illum dolorem, rem officia, id explicabo sapiente</p>
                </div>
                <div class="row how-it-work text-center">
                    <div class="col-md-4">
                        <div class="single-work wow fadeInUp" data-wow-delay="0.8s">
                            <img src="{{ asset('public/img/how-work1.png') }}" alt="">
                            <h3>Searching for the best job</h3>
                            <p>Using the outcomes from the job, we will put together a plan for the most effective marketing strategy to get the best results.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single-work  wow fadeInUp"  data-wow-delay="0.9s">
                            <img src="{{ asset('public/img/how-work2.png') }}" alt="">
                            <h3>Searching for the best job</h3>
                            <p>Using the outcomes from the job, we will put together a plan for the most effective marketing strategy to get the best results.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single-work wow fadeInUp"  data-wow-delay="1s">
                            <img src="{{ asset('public/img/how-work3.png') }}" alt="">
                            <h3>Searching for the best job</h3>
                            <p>Using the outcomes from the job, we will put together a plan for the most effective marketing strategy to get the best results.</p>
                        </div>
                    </div>
                </div>
            </div>
            <hr>

            <div class="container">
                <div class="row job-posting wow fadeInUp" data-wow-delay="1s">
                    <div role="tabpanel">
                      <!-- Nav tabs -->
                      <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#job-seekers" aria-controls="home" role="tab" data-toggle="tab">Job Seekers</a>
                        </li>
                        <li role="presentation">
                            <a href="#employeers" aria-controls="profile" role="tab" data-toggle="tab">Employeers</a>
                        </li>
                      </ul>
                    </div>

                      <!-- Tab panes -->
                      <div class="tab-content">
                      {{-- JObseeker --}}
                        <div role="tabpanel" class="tab-pane fade in active" id="job-seekers">
                            <ul class="list-inline job-seeker">
                            @php
                                 $i = 0;   
                            @endphp
                            @foreach ($jobseekerlist as $jobseeker)
                                <li>
                                    <a href="{{url('jobseeker/portofolio').'/'.$jobseeker->jobseeker_id}}">
                                        <img style="max-width:168px !important; " src="{{ asset(isset($jobseeker->profile_img)?'storage/jobseeker_img/'.$jobseeker->profile_img:'images/no-image.png')}}" alt="">
                                        <div class="overlay"><h3>{{ $jobseeker->full_name }}</h3><p>{{ $jobseeker->full_name }}</p></div>
                                    </a>
                                </li>
                             @endforeach
                            </ul>
                        </div>
                        {{-- Employer --}}
                        <div role="tabpanel" class="tab-pane fade" id="employeers">
                            <ul class="list-inline">
                            @foreach ($employerList as $employer)
                                
                                

                                <li>
                                <a href="">
                                    <img style="max-width:168px !important;" src="{{ asset(isset($employer->companylogo)?'storage/company_logo/'.$employer->companylogo:'images/no-image.png')}}" alt="">
                                        <div class="overlay"><h3>{{ $employer->companyname }}</h3></div>
                                    </a>
                                </li>

                                @endforeach
                                
                            </ul>
                        </div>
                      </div>

                    </div>
                </div>
            </div>
            <hr>

            <div class="container">
                <div class="row page-title text-center wow bounce"  data-wow-delay="1s">
                    <h5>Recent Jobs</h5>
                    <h2><span>{{ count($jobs)>0?count($jobs):'No' }}</span> Available jobs for you</h2>
                </div>


                <div class="section latest-jobs-ads">
                    <div class="section-title tab-manu">
                    <div class="row">
                        <div class="col-md-3">
                            <h3>Latest Jobs</h3>
                        </div>
                        <div class="col-md-9">

                             <ul class="nav nav-tabs">
                                <li class="active"><a data-toggle="tab" href="#home">Hot Jobs</a></li>
                                <li><a data-toggle="tab" href="#menu2">Recent Jobs</a></li>
                                <li><a data-toggle="tab" href="#menu3">Popular Jobs</a></li>
                            
                              </ul>

                               </div>
                    </div>
                    </div>

        <div class="tab-content">
            <div id="home" class="tab-pane fade in active">
                       

                                  @if(count($hotjobs)>0)
              @foreach($hotjobs as $hotjob)
              
                  <div class="job-ad-item">
                      <div class="item-info wow rollIn">
                          <div class="item-image-box">
                              <div class="item-image">
                                  <a href="{{url('showdetails').'/'.$hotjob->id}}">{{Html::image('/storage/company_logo/'.$hotjob->companylogo,'hotjob image',array('class'=>'img-responsive'))}}</a>
                              </div><!-- item-image -->
                          </div>

                          <div class="ad-info">
                              <span><a href="{{url('showdetails').'/'.$hotjob->id}}" class=title>{{$hotjob->jobtitle}}</a> @ <a href="#">{{$hotjob->companyname}}</a></span>
                              <div class="ad-meta">
                                  <ul>
                                      <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>{{$hotjob->div_name}}</a></li>
                                      <li><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i>{{$hotjob->jobtype}}</a></li>
                                      <li><a href="#"><i class="fa fa-money" aria-hidden="true"></i>{{$hotjob->salaryrange}}</a></li>
                                      <li><a href="#"><i class="fa fa-tags" aria-hidden="true"></i>{{$hotjob->catname}}</a></li>
                                  </ul>
                              </div><!-- ad-meta -->                                  
                          </div><!-- ad-info -->
                          <div class="button">
                              <a href="{{url('showdetails').'/'.$hotjob->id}}" class="btn btn-primary">Apply Now</a>
                          </div>
                      </div><!-- item-info -->
                  </div><!-- ad-item -->

                  @endforeach
                  @else
                  <h1>No hot job found at this moment</h1>
                  @endif  




                      </div>
                     
                      <div id="menu2" class="tab-pane fade">
                                  
                            @if(count($recemtJobs)>0)
              @foreach($recemtJobs as $recemtJob)

              <div class="job-ad-item">
                  <div class="item-info wow rollIn">
                      <div class="item-image-box">
                          <div class="item-image">
                              <a href="{{url('showdetails/'.$recemtJob->id)}}">{{Html::image('/storage/company_logo/'.$recemtJob->companylogo,'recemtJob image',array('class'=>'img-responsive'))}}</a>
                          </div><!-- item-image -->
                      </div>

                      <div class="ad-info">
                          <span><a href="{{url('showdetails/'.$recemtJob->id)}}" class=title>{{$recemtJob->jobtitle}}</a> @ <a href="#">{{$recemtJob->companyname}}</a></span>
                          <div class="ad-meta">
                              <ul>
                                  <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>{{$recemtJob->div_name}}</a></li>
                                  <li><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i>{{$recemtJob->jobtype}}</a></li>
                                  <li><a href="#"><i class="fa fa-money" aria-hidden="true"></i>{{$recemtJob->salaryrange}}</a></li>
                                  <li><a href="#"><i class="fa fa-tags" aria-hidden="true"></i>{{$recemtJob->catname}}</a></li>
                              </ul>
                          </div><!-- ad-meta -->                                  
                      </div><!-- ad-info -->
                      <div class="button">
                          <a href="{{url('showdetails/'.$recemtJob->id)}}" class="btn btn-primary">Apply Now</a>
                      </div>
                  </div><!-- item-info -->
              </div><!-- ad-item -->

                  @endforeach
                  @else
                  <h1>No hot job found at this moment</h1>
                  @endif  
                      </div>




                       <div id="menu3" class="tab-pane fade">
                        
               @if($populjobs !=false)
              @foreach($populjobs as $populjob)

              <div class="job-ad-item">
                  <div class="item-info">
                      <div class="item-image-box">
                          <div class="item-image">
                              <a href="{{url('showdetails/'.$populjob->job_id)}}">{{Html::image('/storage/company_logo/'.$populjob->companylogo,'popularJob image',array('class'=>'img-responsive'))}}</a>
                          </div><!-- item-image -->
                      </div>

                      <div class="ad-info">
                          <span><a href="{{url('showdetails/'.$populjob->job_id)}}" class="title">{{$populjob->jobtitle}}</a> @ <a href="{{url('showdetails/'.$populjob->job_id)}}">{{$populjob->companyname}}</a></span>
                          <div class="ad-meta">
                              <ul>
                                  <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>{{$populjob->div_name}}</a></li>
                                  <li><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i>{{$populjob->jobtype}}</a></li>
                                  <li><a href="#"><i class="fa fa-money" aria-hidden="true"></i>{{$populjob->salaryrange}}</a></li>
                                  <li><a href="#"><i class="fa fa-tags" aria-hidden="true"></i>{{$populjob->catagoryname}}</a></li>
                              </ul>
                          </div><!-- ad-meta -->                                  
                      </div><!-- ad-info -->
                      <div class="button">
                          <a href="{{url('showdetails/'.$populjob->job_id)}}" class="btn btn-primary">Apply Now</a>
                      </div>
                  </div><!-- item-info -->
              </div><!-- ad-item -->

                  @endforeach
                  @else
                  <h1>No popular found at this moment</h1>
                  @endif  

                    </div> 


            </div>
            <hr>

            <div class="container">
                <div class="row page-title text-center  wow bounce"  data-wow-delay=".7s">
                    <h5>Important Notice</h5>
                    <h2>Offer and Training info</h2>
                </div>
                <div class="row testimonial">
                    <div class="col-md-12">
                        <div id="testimonial-slider">
                        @if(isset($homenotice))
                        @foreach($homenotice as $notice)
                            <div class="item">
                                <div class="client-text">                                
                                    <p>{{$notice->notice}}</p>
                                    <h4><strong>{{$notice->title}}</strong> <i>{{$notice->created_at}}</i></h4>
                                </div>
                                <div class="client-face">
                                    {{-- <img src="img/client-face2.png" alt=""> --}}
                                </div>
                            </div>
                            @endforeach
                          @endif
                        </div>
                    </div>
                </div>
            </div>

        </div>
        </div>
        

	@endsection
		
		
		
		
        
