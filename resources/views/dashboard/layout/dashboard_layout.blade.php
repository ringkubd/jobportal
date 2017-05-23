<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>IDBJOBPORTAL</title>

    <!-- Bootstrap Core CSS -->
    <!-- <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"> -->

    <!-- MetisMenu CSS -->
    {{-- <link href="bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
 --}}
    <!-- Timeline CSS -->
    {{-- <link href="dist/css/timeline.css" rel="stylesheet"> --}}

    <!-- Custom CSS -->
    {{-- <link href="dist/css/sb-admin-2.css" rel="stylesheet"> --}}

    <!-- Morris Charts CSS -->
    {{-- <link href="bower_components/morrisjs/morris.css" rel="stylesheet"> --}}

    <!-- Custom Fonts -->
    {{-- <link href="bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"> --}}

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


    <!-- Styles -->
    
    {!! Html::style('ample/bootstrap/dist/css/bootstrap.min.css') !!}
    {!! Html::style('css/footer-distributed-with-address-and-phones.css') !!}
    {!! Html::style('font-awesome/css/font-awesome.min.css') !!}
    {!! Html::style('css/sb-admin-2.css') !!}
    {!! Html::style('css/admin_style.css') !!}
    @yield('style')

    {!! Html::script('js/jquery-3.2.1.min.js') !!}
    {!! Html::script('js/bootstrap.min.js') !!}
    {!! Html::script('js/metisMenu.min.js') !!}
    {!! Html::script('js/sb-admin-2.js') !!}
    @yield('script')

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                 <div class="dropdown">
                 <a class="navbar-brand dropdown-toggle" data-toggle="dropdown">IDB Job Portal</a>
                  <ul class="dropdown-menu">
                    <li><a href="{!!URL::to('inspector/')!!}">Dashboard</a></li>
                    <li><a href="{!!URL::to('/')!!}" target="_blank">View Site</a></li>
                  </ul>
                </div> 

                
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-tasks fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-tasks">
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 1</strong>
                                        <span class="pull-right text-muted">40% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 2</strong>
                                        <span class="pull-right text-muted">20% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                            <span class="sr-only">20% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 3</strong>
                                        <span class="pull-right text-muted">60% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 4</strong>
                                        <span class="pull-right text-muted">80% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete (danger)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Tasks</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-tasks -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                        <a href="{{ url('inspector/logout') }}" class="btn btn-danger btn-block waves-effect waves-light"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('inspector/logout')  }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->   
           
        </nav>

<div class="main_content">
    <div class="row">
        <div class="col-md-2 navsidebar">

            <div class="navbar-default" role="navigation">
                <div class="sidebar-nav navbar-collapse sidebar">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                            <!-- /input-group -->
                        </li>

                        <li>
                            <a href="{!!URL::to('inspector/')!!}"><i class="fa fa-dashboard fa-fw"></i>Dashboard</a>
                        </li>
                        
                        <li>
                            <a href="{!!URL::to('inspector/managetheme')!!}"><i class="fa fa-table fa-fw"></i>Manage theme</a>
                        </li>

                        <li>
                            <a href="{!!URL::to('inspector/category')!!}"><i class="fa fa-table fa-fw"></i>Manage Category</a>
                        </li>
                        <li>
                            <a href="{!!URL::to('inspector/industrytype')!!}"><i class="fa fa-wrench fa-fw"></i>Manage Insdustry</a>
                        </li>

                        <li>
                            
                            <a href="{!!URL::to('inspector/jobseeker')!!}"><i class="fa fa-bar-chart-o fa-fw"></i> Jobseeker Management</a>
                             
                        </li>

                        <li>
                            <a href="{!!URL::to('inspector/employer')!!}"><i class="fa fa-table fa-fw"></i>Employer Management</a>
                        </li>
                        <li>
                            
                            <a href="{!!URL::to('inspector/job')!!}"><i class="fa fa-bar-chart-o fa-fw"></i> Pending jobs</a>
                             
                        </li>
                        <li>
                            
                            <a href="{!!URL::to('inspector/publishedjob')!!}"><i class="fa fa-bar-chart-o fa-fw"></i> Published jobs</a>
                             
                        </li>

                         <li>
                            
                            <a href="{!!URL::to('inspector/trashjob')!!}"><i class="fa fa-bar-chart-o fa-fw"></i> Trashed jobs</a>
                             
                        </li>
                        

                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i>Location management<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{!!URL::to('inspector/location')!!}">Country management</a>
                                </li>
                                <li>
                                    <a href="{!!URL::to('inspector/divisionlist')!!}">Division management</a>
                                </li>

                                <li>
                                    <a href="{!!URL::to('inspector/districtlist')!!}">District management</a>
                                </li>

                                <li>
                                    <a href="{!!URL::to('inspector/arealist')!!}">Area management</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#">Education management<span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="{!!URL::to('inspector/levelofeducation')!!}">lavel of education management</a>
                                </li>
                                <li>
                                    <a href="{!!URL::to('inspector/examtitle')!!}">Exam title management</a>
                                </li>
                                <li>
                                    <a href="{!!URL::to('inspector/groupormajors')!!}">Education group management</a>
                                </li>
                            </ul>
                            <!-- /.nav-third-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </div>

                


                    
                @yield('content')









    <!-- /#wrapper -->

    <!-- jQuery -->
    {{-- <script src="bower_components/jquery/dist/jquery.min.js"></script> --}}

    <!-- Bootstrap Core JavaScript -->
    {{-- <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script> --}}

    <!-- Metis Menu Plugin JavaScript -->
    {{-- <script src="bower_components/metisMenu/dist/metisMenu.min.js"></script> --}}

    <!-- Custom Theme JavaScript -->
    {{-- <script src="dist/js/sb-admin-2.js"></script> --}}


<footer class="footer-distributed">

            <div class="footer-left">

                <h3>IDB<span>JobPortal</span></h3>

                <p class="footer-links">
                    <a href="#">Home</a>
                    ·
                    <a href="#">Blog</a>
                    ·
                    <a href="#">Pricing</a>
                    ·
                    <a href="#">About</a>
                    ·
                    <a href="#">Faq</a>
                    ·
                    <a href="#">Contact</a>
                </p>

                <p class="footer-company-name">IDB-BISEW &copy; 2017</p>
            </div>

            <div class="footer-center">

                <div>
                    <i class="fa fa-map-marker"></i>
                    <p><span>21 Revolution Street</span> Dhaka, Bangladesh</p>
                </div>

                <div>
                    <i class="fa fa-phone"></i>
                    <p>+1 555 123456</p>
                </div>

                <div>
                    <i class="fa fa-envelope"></i>
                    <p><a href="mailto:support@company.com">support@jobportal.com</a></p>
                </div>

            </div>

            <div class="footer-right">

                <p class="footer-company-about">
                    <span>About Jobportal</span>
                    Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.
                </p>

                <div class="footer-icons">

                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                    <a href="#"><i class="fa fa-github"></i></a>

                </div>

            </div>

        </footer>

</div>
</body>

</html>
