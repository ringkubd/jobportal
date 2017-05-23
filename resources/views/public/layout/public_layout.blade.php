<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>{{ isset($portal_option['site_name'])?$portal_option['site_name']:"IDBJOBPORTAL" }}|@yield('page_title')</title>
        <meta name="description" content="company is a free job board template">
        <meta name="author" content="">
        <meta name="keyword" content="html, css, bootstrap, job-board">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800' rel='stylesheet' type='text/css'>

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="icon" href="favicon.ico" type="image/x-icon">

        <link rel="stylesheet" href="{{ asset('public/css/normalize.css') }}">
        <link rel="stylesheet" href="{{ asset('public/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('public/css/fontello.css') }}">
        <link rel="stylesheet" href="{{ asset('public/css/animate.css') }}">        
        <link rel="stylesheet" href="{{ asset('public/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('public/css/owl.carousel.css') }}">
        <link rel="stylesheet" href="{{ asset('public/css/owl.theme.css') }}">
        <link rel="stylesheet" href="{{ asset('public/css/owl.transitions.css') }}">
        <link rel="stylesheet" href="{{ asset('public/style.css') }}">
        <link rel="stylesheet" href="{{ asset('public/responsive.css') }}">
        <script src="{{ asset('js/jquery-3.2.1.min.js')}}"></script>
        @yield('style')
        
        <style>
            #login-dp{
                    min-width: 250px;
                    padding: 14px 14px 0;
                    overflow:hidden;
                    background-color:rgba(255,255,255,.8);
                }
                #login-dp .help-block{
                    font-size:12px    
                }
                #login-dp .bottom{
                    background-color:rgba(255,255,255,.8);
                    border-top:1px solid #ddd;
                    clear:both;
                    padding:14px;
                }
                #login-dp .social-buttons{
                    margin:12px 0    
                }
                #login-dp .social-buttons a{
                    width: 49%;
                }
                #login-dp .form-group {
                    margin-bottom: 10px;
                }
                .btn-fb{
                    color: #fff;
                    background-color:#3b5998;
                }
                .btn-fb:hover{
                    color: #fff;
                    background-color:#496ebc 
                }
                .btn-tw{
                    color: #fff;
                    background-color:#55acee;
                }
                .btn-tw:hover{
                    color: #fff;
                    background-color:#59b5fa;
                }
                @media(max-width:768px){
                    #login-dp{
                        background-color: inherit;
                        color: #fff;
                    }
                    #login-dp .bottom{
                        background-color: inherit;
                        border-top:0 none;
                    }
                }
                .keep{
                    background-color: brown !important;
                }
                        *
        {
            -webkit-border-radius: 0px  !important;
            -moz-border-radius: 0px  !important;
            border-radius: 0px !important;
        }
        htlm, body
        {
            padding: 0;
            margin: 0;
            position: relative;
        }
        
                        @yeild('style')
        </style>


        
    </head>
    <body>

        <div id="preloader">
            <div id="status">&nbsp;</div>
        </div>
        <!-- Body content -->
		
        <div class="header-connect">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-8 col-xs-8">
                    <!-- HEADER CONTACT INFO -->
                        <div class="header-half header-call">
                            <p>
                                <span><i class="icon-cloud"></i>+019 4854 8817</span>
                                <span><i class="icon-mail"></i>{{ isset($portal_option['site_email'])?$portal_option['site_email']:"abc@gmail.com" }}</span>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-2 col-md-offset-5  col-sm-3 col-sm-offset-1  col-xs-3  col-xs-offset-1">
                        <div class="header-half header-social">

                        <!-- Social Link -->

                            <ul class="list-inline">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-vine"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		
		{{--Left Vertical Share Button --}}

                <div class="a2a_kit a2a_kit_size_32 a2a_floating_style a2a_vertical_style" style="left:0px; top:150px;">
                    <a class="a2a_button_facebook"></a>
                    <a class="a2a_button_twitter"></a>
                    <a class="a2a_button_google_plus"></a>
                    <a class="a2a_button_pinterest"></a>
                    <a class="a2a_dd" href="https://www.addtoany.com/share"></a>
                </div>

                <style type="text/css">
                    /* Hide AddToAny vertical share bar when screen is less than 980 pixels wide */
                    @media screen and (max-width: 980px) {
                        .a2a_floating_style.a2a_vertical_style { display: none; }
                    }
                </style>

                <script async src="https://static.addtoany.com/menu/page.js"></script>
                <div class="a2a_kit a2a_kit_size_32 a2a_floating_style a2a_vertical_style" style="right: 0px; top: 150px;">
                    <a class="btn btn-fb" style="text-align: center;">
                        <h6>Employer</h6>
                        <span class="badge" id="totalemployer"></span>
                    </a>
                    <a class="btn btn-tw" style="text-align: center;">
                        <h6>jobseeker</h6>
                        <span class="badge" id="totaljobseeker"></span>
                    </a>
                    <a class="btn btn-warning" style="text-align: center;">
                        <h6>Job</h6>
                        <span class="badge"  id="totaljob"></span>
                    </a>
                    <a class="btn btn-info" style="text-align: center;">
                        <h6>Online</h6>
                        <span class="badge" id="jobseekeronline"></span>
                    </a>
                </div>
        {{--Left Vertical Share Button --}}

        <nav class="navbar navbar-default">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#"><img src="{{ asset('public/img/logo.png') }}" alt="" width="150"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <div class="button navbar-right">
               <ul class="nav navbar-nav navbar-right">
                @if(Auth::guard('employer')->check() || Auth::guard('jobseeker')->check())
                    <li>
                        <a href="#"
                            onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        @if(Auth::guard('employer')->check())

                        <form id="logout-form" action="{{ url('employer/logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                        @else
                        <form id="logout-form" action="{{ url('jobseeker/logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                        @endif
                    </li>
                @else
                    <li id="dropdown-li">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Login</b> <span class="caret"></span></a>
                        <ul id="login-dp" class="dropdown-menu">
                            <li>
                                 <div class="row">
                                        <div class="col-md-12">
                                            Login via
                                            <!-- <div class="social-buttons">
                                                <a href="#" class="btn btn-fb"><i class="fa fa-facebook"></i> Facebook</a>
                                                <a href="#" class="btn btn-tw"><i class="fa fa-twitter"></i> Twitter</a>
                                            </div> -->
                                            <!-- or -->
                                            <div class="panel panel-heading social-buttons">
                                                <span class="btn btn-primary keep" id="employer">Employer</span>
                                                <span class="btn btn-primary" id="jobseeker">Jobseeker</span>
                                            </div>
                                             <form class="form" id="login-nav-form" role="form" method="POST" action="{{ url('/employer/login') }}" accept-charset="UTF-8" id="login-nav">
                                             {{ csrf_field() }}
                                                    <div class="form-group">
                                                         <label class="sr-only" for="exampleInputEmail2">Email address</label>
                                                         <input type="email" class="form-control" id="exampleInputEmail2" name="email" placeholder="Email address" required>
                                                    </div>
                                                    <div class="form-group">
                                                         <label class="sr-only" for="exampleInputPassword2">Password</label>
                                                         <input type="password" name="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required>
                                                         <div class="help-block text-right"><a id="password-reset" href="{{ url('/employer/password/reset') }}">Forget the password ?</a></div>
                                                    </div>
                                                    <div class="form-group">
                                                         <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                                                    </div>
                                                    <div class="checkbox"  id="keep-me-login">
                                                         <label>
                                                         <input type="checkbox"  name="remember"> <span class="keep-me-login">keep me logged-in</span>
                                                         </label>
                                                    </div>
                                             </form>
                                        </div>
                                        <div class="bottom text-center">
                                            New here ? <a href="#"><b>Join Us</b></a>
                                        </div>
                                 </div>
                            </li>
                        </ul>
                    </li>
                    @endif
                  </ul>
                              
              </div>
              <ul class="main-nav nav navbar-nav navbar-right">
                <li class="wow fadeInDown" data-wow-delay="0s"><a class="active" href="{{ url('/') }}">Home</a></li>
                <li class="wow fadeInDown" data-wow-delay="0.1s"><a href="{{ url('jobseeker/') }}">Job Seekers</a></li>
                <li class="wow fadeInDown" data-wow-delay="0.2s"><a href="{{ url('employer/') }}">Employeers</a></li>
                <li class="wow fadeInDown" data-wow-delay="0.3s"><a href="#">About us</a></li>
                <li class="wow fadeInDown" data-wow-delay="0.4s"><a href="#">Blog</a></li>
                <li class="wow fadeInDown" data-wow-delay="0.5s"><a href="{{url('contact')}}">Contact</a></li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>

        
        
        @yield('content')
        <div class="footer-area">
            <div class="container">
                <div class="row footer">
                    <div class="col-md-4">
                        <div class="single-footer">
                            <img src="{{asset('public/img/logo.png')}}" width="150" alt="" class="wow pulse" data-wow-delay="1s">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati architecto quaerat facere blanditiis tempora sequi nulla accusamus, possimus cum necessitatibus suscipit quia autem mollitia, similique quisquam molestias. Vel unde, blanditiis.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single-footer">
                            <h4>Twitter update</h4>
                            <div class="twitter-updates">
                                <div class="single-tweets">
                                    <h5>ABOUT 9 HOURS</h5>
                                    <p><strong>AGOMeet Aldous</strong> - a Brave New World for #rails with more cohesion, less coupling and greater dev speed <a href="http://t.co/rsekglotzs">http://t.co/rsekglotzs</a></p>
                                </div>
                                <div class="single-tweets">
                                    <h5>ABOUT 9 HOURS</h5>
                                    <p><strong>AGOMeet Aldous</strong> - a Brave New World for #rails with more cohesion, less coupling and greater dev speed <a href="http://t.co/rsekglotzs">http://t.co/rsekglotzs</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single-footer">
                            <h4>Useful lnks</h4>
                            <div class="footer-links">
                                <ul class="list-unstyled">
                                    <li><a href="">About Us</a></li>
                                    <li><a href="#services" class="active">Services</a></li>
                                    
                                    <li><a href="{{url('contact')}}">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row footer-copy">
                    <p><span>(C) webstie, All rights reserved By WPSI-PTTC-30</span> </p>
                </div>
            </div>
        </div>

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="public/js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="{{ asset('public/js/bootstrap.min.js')}}"></script>
        {{-- <script src="{{ asset('js/jquery-3.2.1.min.js')}}"></script> --}}
        <script src="{{ asset('public/js/vendor/modernizr-2.6.2.min.js') }}"></script>
        <script src="{{ asset('public/js/owl.carousel.min.js')}}"></script>
        <script src="{{ asset('public/js/wow.js')}}"></script>
        <script src="{{ asset('public/js/main.js')}}"></script>
        <script src="{{ asset('public/public.js')}}"></script>
		<script src="{{ asset('public/js/home.js')}}"></script>
        @yield('script')
        {{-- <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script> --}}
        {{-- <script>tinymce.init({ selector:'textarea' });</script> --}}
        <script>
            $(document).ready(function() {
                 var passwordReset = $(document).find('#password-reset');
                $(document).find('#employer').click(function(event) {
                    //KEEP OPEN FORM
                    event.stopPropagation();
                    $(document).find('#dropdown-li').addClass('open');
                    $(this).addClass('keep');
                    $("#jobseeker").removeClass('keep');
                    $(document).find('#login-nav-form').attr('action', '{!! url("employer/login")!!}');
                    passwordReset.attr('href', '{!! url("employer/password/reset")!!}');
                });
                $(document).find('#jobseeker').click(function(event) {
                    //KEEP OPEN FORM
                    event.stopPropagation();
                    $(document).find('#dropdown-li').addClass('open');
                    $(this).addClass('keep');
                    $("#employer").removeClass('keep');
                    $(document).find('#login-nav-form').attr('action', '{!! url("jobseeker/login") !!}');
                    passwordReset.attr('href', '{!! url("jobseeker/password/reset")!!}');
                });

                $(document).find('#keep-me-login').click(function(event) {
                    //KEEP OPEN FORM
                    event.stopPropagation();
                });


                $(document).find('#login-nav-form > .form-group').click(function(event) {
                    //KEEP OPEN FORM
                    event.stopPropagation();
                });

                // tinymce.init({
                //   selector: 'textarea',
                //   height: 500,
                //   theme: 'modern',
                //   plugins: [
                //     'advlist autolink lists link image charmap print preview hr anchor pagebreak',
                //     'searchreplace wordcount visualblocks visualchars code fullscreen',
                //     'insertdatetime media nonbreaking save table contextmenu directionality',
                //     'emoticons template paste textcolor colorpicker textpattern imagetools codesample toc help'
                //   ],
                //   toolbar1: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
                //   toolbar2: 'print preview media | forecolor backcolor emoticons | codesample help',
                //   image_advtab: true,
                //   templates: [
                //     { title: 'Test template 1', content: 'Test 1' },
                //     { title: 'Test template 2', content: 'Test 2' }
                //   ],
                //   content_css: [
                //     '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
                //     '//www.tinymce.com/css/codepen.min.css'
                //   ]
                //  });
                            });
        </script>

    </body>
</html>