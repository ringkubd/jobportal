@extends('employer.ample.index')
@section('title')
Manage Jobs
@endsection
@section('style')
{!!Html::style('css/managejobs.css')!!}



@endsection
@section('script')
{{--asset('js/managejob.js')--}}
{!!Html::script('js/managejob.js')!!}

@endsection
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">


<div class="container">
        <!-- ===========================
        HEADER
        ============================ -->
        <div id="header" class="row">
            <div class="col-sm-2">
                <img class="propic" height="150px" src="https://pbs.twimg.com/profile_images/624520958032875520/RRODM_xc.jpg" alt="">
            </div>
            <!-- photo end-->

            <div class="col-sm-8">
                <div class="cv-title">
                    <div class="row">
                        <div class="col-sm-7">
                            <h1>{{$return[0]->name}}</h1>
                        </div>
                        <div class="col-sm-5 text-right dl-share">
                            <!-- AddToAny BEGIN -->
                            <a class="a2a_dd btn btn-default" href=""><span class="fa fa-share "></span> Share</a>
                            <script type="text/javascript">
                                var a2a_config = a2a_config || {};
                                a2a_config.linkname = "Minimal CV by EvenFly";
                                a2a_config.num_services = 6;
                                a2a_config.prioritize = ["facebook", "twitter", "google_plus", "linkedin", "pinterest", "email"];
                            </script>
                            <script type="text/javascript" src="//static.addtoany.com/menu/page.js"></script>
                            <!-- AddToAny END -->

                            <a class="btn btn-success" href=""><span class="fa fa-download"></span> Download</a>
                        </div>
                    </div>
                    <h2>UI/UX Designer</h2>
                </div><!-- Title end-->

                <!-- ===========================
                SOCIAL & CONTACT
                ============================ -->
                <div class="row">
                    <div class="col-sm-4">
                        <ul class="list-unstyled">
                            <li><a href=""><span class="social fa fa-home"></span>EvenFly.com</a>
                            </li>
                            <li><a href=""><span class="social fa fa-skype"></span>{{$return[0]->jobseeker_phone1}}</a>
                            </li>
                            <li><a href="mailto:support@evenfly.com"><span class="social fa fa-envelope-o"></span>me@mail.com</a>
                            </li>
                        </ul>
                    </div><!-- social 1st col end-->

                    <div class="col-sm-4">
                        <ul class="list-unstyled">
                            <li><a href=""><span class="social fa fa-facebook"></span>Facebook</a>
                            </li>
                            <li><a href=""><span class="social fa fa-twitter"></span>Twitter</a>
                            </li>
                            <li><a href=""><span class="social fa fa-linkedin"></span>Linkedin</a>
                            </li>
                        </ul>
                    </div><!-- social 2nd col end-->

                    <div class="col-sm-4">
                        <ul class="list-unstyled">
                            <li><a href=""><span class="social fa fa-behance"></span>Behance</a>
                            </li>
                            <li><a href=""><span class="social fa fa-dribbble"></span>Dribbble</a>
                            </li>
                            <li><a href=""><span class="social fa fa-instagram"></span>Instagram</a>
                            </li>
                        </ul>
                    </div><!-- social 3rd col end-->
                </div><!-- header social end-->
            </div><!-- header right end-->
        </div><!-- header end-->

        <hr class="firsthr">

        <!-- ===========================
        BODY LEFT PART
        ============================ -->
        <div class="col-md-6 mainleft">
            <div id="statement" class="row mobmid">
                <div class="col-sm-1">
                    <span class="secicon fa fa-user"></span>
                </div><!--icon end-->

                <div class="col-sm-11">
                    <h3>Personal statement </h3>
                    <p>Hi, I am Bappy from Bangladesh.Adipiscing elit. Nullam dapibus vehicula condimentum. Curabitur elit enim, accumsan vitae tristique ut, mollis at orci. Fusce cursus interdum neque nec aliquam. Proin turpis leo, laoreet non ultricies non, dictum nec nulla. Duis vitae nisi eu odio Adipiscing elit. Nullam dapibus vehicula condimentum. Curabitur elit enim, accumsan.</p>

                    <p>Consectetur adipisicing elit. Hic labore, unde, ratione, itaque ducimus provident error similique qui, recusandae nam dignissimos autem. Sequi quas quis non, odit assumenda similique neque.</p>

                    <p class="signature">TowkirAhmed</p>
                </div><!--info end-->
            </div><!--personal statement end-->

            <hr>

            <div id="education" class="row mobmid">
                <div class="col-sm-1">
                    <span class="secicon fa fa-graduation-cap"></span>
                </div><!--icon end-->

                <div class="col-sm-11">
                    <h3>Education &amp; Certification</h3>

                    <div class="row">
                        <div class="col-md-9">
                            <h4>MSc in Design &amp; Fine Art</h4>
                            <p class="sub"><a href="">Ideal Institute of Science and Technology</a>
                            </p>
                            <p>Studying all aspect of Graphic Design Including Advertising Design, Branding, Copy Exhibition Design, Ilustration, Information Design, Packaging Design and Website Design</p>
                        </div>

                        <div class="year col-md-3">
                            <p>2009-2011</p>
                        </div>
                    </div><!--Education & Certification 1 end-->
                    
                    <hr>
                    
                    <div class="row">
                        <div class="col-md-9">
                            <h4>BSc in Graphic Design</h4>
                            <p class="sub"><a href="">Ideal Institute of Science and Technology</a>
                            </p>
                            <p>Studying all aspect of Graphic Design Including Advertising Design, Branding, Copy Exhibition Design, Ilustration, Information Design, Packaging Design and Website Design</p>
                        </div>

                        <div class="year col-md-3">
                            <p>2006-2009</p>
                        </div>
                    </div><!--Education & Certification 2 end-->

                    <hr>

                    <div class="row">
                        <div class="col-md-9">
                            <h4>Diploma in Graphic Design</h4>
                            <p class="sub"><a href="">Ideal Institute of Science and Technology</a>
                            </p>
                            <p>Studying all aspect of Graphic Design Including Advertising Design, Branding, Copy Exhibition Design, Ilustration, Information Design, Packaging Design and Website Design</p>
                        </div>

                        <div class="year col-md-3">
                            <p>2003-2006</p>
                        </div>
                    </div><!--Education & Certification 3 end-->
                </div>
            </div><!--Education & Certifications end-->
            
            <hr>

            <!-- ===========================
            JOB EXPERIENCES
            ============================ -->
            <div id="job" class="row mobmid">
                <div class="col-sm-1">
                    <span class="secicon fa fa-briefcase"></span>
                </div><!--icon end-->

                <div class="col-sm-11">
                    <h3>Job Experiences</h3>

                    <div class="row">
                        <div class="col-md-9">
                            <h4>Lead Graphic Designer</h4>
                            <p class="sub"><a href="">Lifeview Media Ltd.</a>
                            </p>
                            <p>Adipiscing elit. Nullam dapibus vehicula condimentum. Curabitur elit enim, accumsan vitae tristique ut, mollis at orci. Fusce cursus interdum neque nec aliquam. Proin turpis leo, laoreet non ultricies non, dictum nec nulla.</p>
                        </div>

                        <div class="year col-md-3">
                            <p>2008 - present</p>
                        </div>
                    </div><!--Job 1 end-->
                    
                    <hr>
                    
                    <div class="row">
                        <div class="col-md-9">
                            <h4>Sr. Graphic Designer</h4>
                            <p class="sub"><a href="">Softech solution ltd.</a>
                            </p>
                            <p>Studying all aspect of Graphic Design Including Advertising Design, Branding, Copy Exhibition Design, Ilustration, Information Design, Packaging Design and Website Design</p>
                        </div>

                        <div class="year col-md-3">
                            <p>2006-2008</p>
                        </div>
                    </div><!--Job 2 end-->
                    
                    <hr>
                    
                       <div class="row">
                        <div class="col-md-9">
                            <h4>Jr. Graphic Designer</h4>
                            <p class="sub"><a href="">TwinTwin Design Solution</a>
                            </p>
                            <p>Studying all aspect of Graphic Design Including Advertising Design, Branding, Copy Exhibition Design, Ilustration, Information Design, Packaging Design and Website Design</p>
                        </div>

                        <div class="year col-md-3">
                            <p>2003-2006</p>
                        </div>
                    </div><!--Job 3 end-->
                </div><!--Job experiences end-->
            </div><!--Job experiences end-->
        </div><!--left end-->
        
        <!-- ===========================
        SIDEBAR
        =========================== -->
        <div class="col-md-4 mainright">
            <div class="row">
                <div class="col-sm-1 col-md-2 mobmid">
                    <span class="secicon fa fa-magic"></span>
                </div><!--icon end-->

                <div class="col-sm-11 col-md-10">
                    <h3 class="mobmid">Technical skills </h3>

                    <p>Photoshop</p>
                    <div class="progress">
                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 65%">
                            <span class="sr-only">65% Complete (success)</span>
                        </div>
                    </div><!--skill end-->


                    <p>Illustrator</p>
                    <div class="progress">
                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%">
                            <span class="sr-only">85% Complete</span>
                        </div>
                    </div><!--skill end-->

                    <p>InDesign</p>
                    <div class="progress">
                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                            <span class="sr-only">60% Complete (warning)</span>
                        </div>
                    </div><!--skill end-->

                    <p>Flash</p>
                    <div class="progress">
                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
                            <span class="sr-only">30% Complete (danger)</span>
                        </div>
                    </div><!--skill end-->
                </div><!--info end-->
            </div><!--tech skills end-->
            
            <hr>

            <div class="row mobmid">
                <div class="col-sm-1 col-md-2">
                    <span class="secicon fa fa-trophy"></span>
                </div><!--icon end-->

                <div class="col-sm-11 col-md-10 ">
                    <h3>Training</h3>

                    <div class="award">
                        <h4>Best Designer 2012</h4>
                        <p class="sub"><a href="">Life View Media Ltd.</a></p>
                        <p>Studying all aspect of Graphic Design Including Advertising Design, Branding, Copy Exhibition Design, Ilustration.</p>
                    </div>
                    <!--1st award end-->

                    <div class="award">
                        <h4>Best Designer 2011</h4>
                        <p class="sub"><a href="">Alexa Design Solution</a></p>
                        <p>Studying all aspect of Graphic Design Including Advertising Design, Branding, Copy Exhibition Design, Ilustration, Information Design, Packaging Design and Website Design</p>
                    </div><!--1st award end-->
                </div><!--awards end-->

            </div>
            
            <hr>

            <div class="row ">
                <div class="col-sm-1 col-md-2 mobmid">
                    <span class="secicon fa fa-quote-left"></span>
                </div><!--icon end-->

                <div class="col-sm-11 col-md-10 testimonials">
                    <h3 class="mobmid">References </h3>

                    <div class="row">
                        <blockquote>
                            <p>Sit amet, consectetur adipisicing elit. Fuga quidem ipsum maiores necessitatibus sint, porro temporibus labore, amet officia unde libero eligendi? Porro dolorum itaque, facere harum amet, rem libero.</p>
                        </blockquote>
                        <img src="img/mushfiq.jpg" alt="">
                        <h4>Mushfiqul Islam</h4>
                        <p>The UX Votch</p>
                    </div><!--1st testimonial end-->

                    <div class="row">
                        <blockquote>
                            <p>Consectetur adipisicing elit. Fuga quidem ipsum maiores necessitatibus sint, porro temporibus labore, unde libero eligendi? Porro dolorum itaque, facere harum amet, rem libero.</p>
                        </blockquote>
                        <img src="img/siblu.jpg" alt="">
                        <h4>E.A. Siblu</h4>
                        <p>The Jatir Vobisshot</p>
                    </div><!--2nd testimonial end-->

                    <div class="row">
                        <blockquote>
                            <p>Fuga quidem ipsum maiores necessitatibus sint, porro temporibus labore, amet officia unde libero eligendi? Porro dolorum itaque, facere harum amet, rem libero.</p>
                        </blockquote>
                        <img src="img/nasir.jpg" alt="">
                        <h4>Nasir Uddin</h4>
                        <p>The Cute Huzur</p>
                    </div><!--3rd testimonial end-->
                </div><!--testimonials end-->
            </div><!--tech skills end-->
        </div><!--right end-->
    </div><!--container end-->

    <!-- ===========================
    FOOTER
    =========================== -->
    <footer class="text-center">
        <p>&copy; <a href="http://creativecommons.org/licenses/by/3.0/">CC-3.0</a>, Just another CV template by <a href="https://evenfly.com">EvenFly </a> - Designed by <a target="_blank" href="http://www.facebook.com/towkirahmedbappy">Towkir Ahmed Bappy</a>.
        </p>
    </footer>



@endsection