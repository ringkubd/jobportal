<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="ample/plugins/images/favicon.png">
    <title>@yield('page_title')|IDBJOBPORTAL</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('ample/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="{{ asset('ample/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css') }}" rel="stylesheet">
    <!-- toast CSS -->
    <link href="{{ asset('ample/plugins/bower_components/toast-master/css/jquery.toast.css') }}" rel="stylesheet">
    <!-- morris CSS -->
    {{-- <link href="ample/plugins/bower_components/morrisjs/morris.css" rel="stylesheet">
    <!-- chartist CSS -->
    <link href="ample/plugins/bower_components/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="ample/plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet"> --}}
    <!-- animation CSS -->
    <link href="{{ asset('ample/css/animate.css') }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('ample/css/style.css') }}" rel="stylesheet">
    <!-- color CSS -->
    <link href="{{ asset('ample/css/colors/default.css') }}" id="theme" rel="stylesheet">
    <link href="{{ asset('jquery_ui/jquery-ui.css') }}" id="theme" rel="stylesheet">
    <link href="{{ asset('jquery_ui/jquery-ui.theme.min.css') }}" id="theme" rel="stylesheet">

    {{-- JQuery --}}
    <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('js/isonlinejobseeker.js')}}"></script>

    @yield('style')
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header">
    <!-- ============================================================== -->
    <!-- Preloader -->
    <!-- ============================================================== -->
    {{-- <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div> --}}
    <!-- ============================================================== -->
    <!-- Wrapper -->
    <!-- ============================================================== -->
    <div id="wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header">
                <div class="top-left-part">
                    <!-- Logo -->
                    <a class="logo" href="{{url('/')}}">
                        <!-- Logo icon image, you can use font-icon also --><b>
                        <!--This is dark logo icon--><img src="{{ asset('ample/plugins/images/admin-logo.png') }}" alt="home" class="dark-logo" /><!--This is light logo icon--><img src="{{ asset('ample/plugins/images/admin-logo-dark.png') }}" alt="home" class="light-logo" />
                     </b>
                        <!-- Logo text image you can use text also --><span class="hidden-xs">
                        <!--This is dark logo text--><img src="{{ asset('ample/plugins/images/admin-text.png') }}" alt="home" class="dark-logo" /><!--This is light logo text--><img src="{{ asset('ample/plugins/images/admin-text-dark.png') }}" alt="home" class="light-logo" />
                     </span> </a>
                </div>
                <!-- /Logo -->
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li>
                        <form role="search" class="app-search hidden-sm hidden-xs m-r-10">
                            <input type="text" placeholder="Search..." class="form-control"> <a href=""><i class="fa fa-search"></i></a> </form>
                    </li>
                    <li>
                        <a class="profile-pic" href="{{url('jobseeker/jshome')}}"> <img src="{{ asset('ample/plugins/images/users/varun.jpg') }}" alt="user-img" width="36" class="img-circle"><b class="hidden-xs">{{Auth::guard('jobseeker')->user()->name}}</b></a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        <!-- End Top Navigation -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav slimscrollsidebar">
                <div class="sidebar-head">
                    <h3><span class="fa-fw open-close"><i class="ti-close ti-menu"></i></span> <span class="hide-menu">Navigation</span></h3>
                </div>
                <ul class="nav" id="side-menu">
                    <li style="padding: 70px 0 0;">
                        <a href="{{url('jobseeker')}}" class="waves-effect"><i class="fa fa-clock-o fa-fw" aria-hidden="true"></i>Dashboard</a>
                    </li>
                   
                    <li>
                        <a href="{{url('jobseeker/managejobs')}}" class="waves-effect"><i class="fa fa-table fa-fw" aria-hidden="true"></i>Managejobs</a>
                    </li>
                    <li>
                        <a href="{{url('jobseeker/blockEmployer')}}" class="waves-effect"><i class="fa fa-font fa-fw" aria-hidden="true"></i>Block Employer</a>
                    </li>
                    <li>
                        <a href="{{url('jobseeker/followEmployer')}}" class="waves-effect"><i class="fa fa-globe fa-fw" aria-hidden="true"></i>Follow Employer</a>
                    </li>
                    <li>
                        <a href="{{ url('jobseeker/resume/edit') }}" class="waves-effect"><i class="fa fa-columns fa-fw" aria-hidden="true"></i>Edit Resume</a>
                    </li>
                    <li>
                        <a href="{{ url('jobseeker/uloadingcv') }}" class="waves-effect"><i class="fa fa-info-circle fa-fw" aria-hidden="true"></i>Uploading CV</a>
                    </li>
                    <li>
                          <a class="nav-container" data-toggle="collapse" data-parent="#stacked-menu" href="#p2"><i class="fa fa-envelope fa-fw" aria-hidden="true"></i>Message<div class="caret-container"><span class="caret arrow"></span></div></a>          
                          <ul class="nav nav-pills nav-stacked collapse" id="p2">
                            <li><a href="{{ url('jobseeker/newmessage') }}"><i class="fa fa-inbox fa-fw" aria-hidden="true"></i>New Message</a></li>
                            <li id="jobseeker_inbox"><a href="{{ url('jobseeker/inbox') }}"><i class="fa fa-inbox fa-fw" aria-hidden="true"></i>Inbox @yield('unreadcount')<span id="unreadcount"></span></a></li>
                            <li><a href="{{ url('jobseeker/sent') }}"><i class="fa fa-paper-plane-o fa-fw" aria-hidden="true"></i>Sent</a></li>
                            <li><a href="{{ url('jobseeker/draft') }}"><i class="fa fa-archive fa-fw" aria-hidden="true"></i>Draft</a></li>
                            <li><a href="{{ url('jobseeker/Trash') }}"><i class="fa fa-trash fa-fw" aria-hidden="true"></i>Trash</a></li>
                            <li class="nav-divider" style="height: 2px; margin: 9px 0; overflow: hidden; background-color: #e5e5e5;"></li>
                          </ul>
                    </li>

                    <li>
                          <a class="nav-container" data-toggle="collapse" data-parent="#portofolio-menu" href="#portofolio"><i class="fa fa-building fa-fw" aria-hidden="true"></i>Portofolio<div class="caret-container"><span class="caret arrow"></span></div></a>          
                          <ul class="nav nav-pills nav-stacked collapse" id="portofolio">
                            <li>
                                <a href="{{ url('jobseeker/portofolio/').'/'.Auth::guard('jobseeker')->user()->id }}"><i class="fa fa fa-eye fa-fw" aria-hidden="true"></i>View Portofolio</a>
                            </li>

                            <li>
                                <a href="{{ url('jobseeker/editportofolio/').'/'.Auth::guard('jobseeker')->user()->id  }}"><i class="fa fa-pencil-square fa-fw" aria-hidden="true"></i>Edit Portofolio</a>
                            </li>
                            <li>
                                <a href="{{ url('jobseeker/manageprojects').'/'.Auth::guard('jobseeker')->user()->id }}"><i class="fa fa-cube fa-fw" aria-hidden="true"></i>Manage Projects</a>
                            </li>

                            <li>
                                <a href="{{ url('jobseeker/managelayout').'/'.Auth::guard('jobseeker')->user()->id }}"><i class="fa fa-paper-plane-o fa-fw" aria-hidden="true"></i>Manage Layout</a>
                            </li>
                            <li>
                                <a href="{{ url('jobseeker/work').'/'.Auth::guard('jobseeker')->user()->id }}"><i class="fa fa-paper-plane-o fa-fw" aria-hidden="true"></i>Manage work</a>
                            </li>
                            
                          </ul>
                    </li>

                </ul>
                <div class="center p-20">
                    <a href="{{ url('jobseeker/logout') }}" class="btn btn-danger btn-block waves-effect waves-light"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('jobseeker/logout')  }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                 </div>
            </div>
            
        </div>
        <!-- ============================================================== -->
        <!-- End Left Sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
            <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Dashboard</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        
                        <ol class="breadcrumb">
                            <li><a href="#">JobSeeker</a></li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                @yield('content')
            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> 2017 &copy; IDBJOBPORTAL </footer>
        </div>
        <!-- ============================================================== -->
        <!-- End Page Content -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{ asset('ample/plugins/bower_components/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{asset('jquery_ui/jquery-ui.min.js')}}"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('ample/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="{{ asset('ample/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js') }}"></script>
    <!--slimscroll JavaScript -->
    <script src="{{ asset('ample/js/jquery.slimscroll.js') }}"></script>
    <!--Wave Effects -->
    <script src="{{ asset('ample/js/waves.js') }}"></script>
    <!--Counter js -->
    {{-- <script src="ample/plugins/bower_components/waypoints/lib/jquery.waypoints.js"></script>
    <script src="ample/plugins/bower_components/counterup/jquery.counterup.min.js"></script>
    <!-- chartist chart -->
    <script src="ample/plugins/bower_components/chartist-js/dist/chartist.min.js"></script>
    <script src="ample/plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script> --}}
    <!-- Sparkline chart JavaScript -->
    <script src="{{ asset('ample/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
    <!-- Custom Theme JavaScript -->
    <script src="{{ asset('ample/js/custom.min.js') }}"></script>
    <script src="{{ asset('ample/js/dashboard1.js') }}"></script>
    <script src="{{ asset('ample/plugins/bower_components/toast-master/js/jquery.toast.js') }}"></script>
    @yield('script')
    
</body>

</html>
