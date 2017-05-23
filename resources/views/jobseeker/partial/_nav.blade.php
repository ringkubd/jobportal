    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Jobportal.com</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav pull-right">
            
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Quick links <span class="caret"></span></a>
              <ul class="dropdown-menu">
                 <li><a href="">New Jobs</a></li>
				 <li><a href="">Profile</a></li>
				 <li><a href="">Part Time</a></li>
				 <li><a href="">Contractual</a></li>
				 <li><a href="">Government</a></li>
				 <li><a href="">Location Wise</a></li>
				 <li><a href="">Overseas</a></li>
              </ul>
            </li>
			<li><a href="">Companies Jobs</a></li>
                           <li><a href="" >Career Counselling</a></li>
                           <li><a href="">FAQ</a></li>
                         
                          <li><a href="">বাংলাতে দেখুন</a></li>
							
                   <li class="dropdown">
                              <a href="" class="dropdown-toggle "  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                              <img src="">
                              <span class="user-name">
                              {{ Auth::guard('jobseeker')->user()->name }}<i class="caret"></i>
                              </span>
                              </a>
                              <ul class="dropdown-menu">
                                 <li> 
                                 <a href="{{ url('/jobseeker/logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ url('/jobseeker/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                  </li>
                              </ul>
                           </li>         
                      

          </ul>
          
        </div><!--/.nav-collapse -->
      </div>
    </nav>