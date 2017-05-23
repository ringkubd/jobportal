<!-- header -->
<header id="header" class="clearfix">
    <!-- navbar -->
    <nav class="navbar navbar-default">
        <div class="container">
            <!-- navbar-header -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url('/') }}"><img class="img-responsive" src="{{ asset('default_assets/images/logo.png') }}" alt="Logo"></a>
            </div>
            <!-- /navbar-header -->
            
            <div class="navbar-left">
                <div class="collapse navbar-collapse" id="navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="{{ url('job_list/') }}">Job list</a></li>
                        <li><a href="{{ url('details/') }}">Job Details</a></li>
                        <li><a href="{{ url('resume/') }}">Resume</a></li> 
                        <li class="dropdown"><a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">Pages<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ url('profile/') }}">Profile</a></li>
                                <li><a href="{{ url('post_resume/') }}">Post Resume</a></li>
                                <li><a href="{{ url('post/') }}">Job Post</a></li>
                                <li><a href="{{ url('edit_resume/') }}">Edit Resume</a></li>
                                <li><a href="{{ url('profile_details/') }}">profile Details</a></li>
                                <li><a href="{{ url('bookmark/') }}">Bookmark</a></li>
                                <li><a href="{{ url('applied_job/') }}">Applied Job</a></li>
                                <li><a href="{{ url('delete_account/') }}">Close Account</a></li>
                                <li><a href="{{ url('signup/') }}">Job Signup</a></li>
                                <li><a href="{{ url('signin/') }}">Job Signin</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div><!-- navbar-left -->
            
            <!-- nav-right -->
            <div class="nav-right">             
                <ul class="sign-in">
                    <li><i class="fa fa-user"></i></li>
                    <li><a href="{{ url('signin/') }}">Sign In</a></li>
                    <li><a href="{{ url('signup/') }}">Register</a></li>
                </ul><!-- sign-in -->                   

                <a href="{{ url('post/') }}" class="btn">Post Your Job</a>
            </div>
            <!-- nav-right -->
        </div><!-- container -->
    </nav><!-- navbar -->
</header><!-- header -->