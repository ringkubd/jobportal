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


    <!-- Styles -->
    
    {!! Html::style('bootstrap/css/bootstrap.min.css') !!}
    {!! Html::style('font-awesome/css/font-awesome.min.css') !!}
    {!! Html::style('css/admin_style.css') !!}
    @yield('style')



</head>

<body>
<div class="row">
	<div class="col-md-12">
		<header>		
			<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
				<div class="navigation">
					<div class="container">					
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<div class="navbar-brand">
								<a href="index.html"><h1><span>Job</span>portal</h1></a>
							</div>
						</div>
						
						<div class="navbar-collapse collapse">							
							<div class="menu">
								<ul class="nav nav-tabs" role="tablist">
									<li role="presentation"><a href="index.html" class="active">Home</a></li>
									<li role="presentation"><a href="about.html">About Us</a></li>
									<li role="presentation"><a href="services.html">Services</a></li>								
									<li role="presentation"><a href="portfolio.html">Portfolio</a></li>
									<li role="presentation"><a href="blog.html">Blog</a></li>
									<li role="presentation"><a href="contact.html">Contact</a></li>						
								</ul>
							</div>
						</div>						
					</div>
				</div>	
			</nav>		
		</header>
	</div>

</div>

	<div class="row">
		<div class="col-md-12" style="margin-top: 80px;">
		</div>
	</div>

		<section id="blog" class="container">
	        <div class="blog">
	            <div class="row">
	                 <div class="col-md-8">
	                    <div class="blog-item">
	                        <div class="row">
	                            <div class="col-xs-12 col-sm-2">
	                                <div class="entry-meta">
	                                    <span id="publish_date">07  JUNY</span>
	                                    <span><i class="fa fa-user"></i> <a href="#">John Doe</a></span>
	                                    <span><i class="fa fa-comment"></i> <a href="#">2 Comments</a></span>
	                                    <span><i class="fa fa-heart"></i><a href="#">56 Likes</a></span>
	                                </div>
	                            </div>
	                                
	                            <div class="col-xs-12 col-sm-10 blog-content">
	                                <a href="#"><img class="img-responsive img-blog" src="images/blog/blog1.jpg" width="100%" alt="" /></a>
	                                <h4>Consequat bibendum quam liquam viverra</h4>
	                                <p>Curabitur quis libero leo, pharetra mattis eros. Praesent consequat libero eget dolor convallis vel rhoncus magna scelerisque. Donec nisl ante, elementum eget posuere a, consectetur a metus. Proin a adipiscing sapien. Suspendisse vehicula porta lectus vel semper. Nullam sapien elit, lacinia eu tristique non.posuere at mi. Morbi at turpis id urna ullamcorper ullamcorper.</p>
	                                <a class="btn btn-primary readmore">Read More <i class="fa fa-angle-right"></i></a>
	                            </div>
	                        </div>    
	                    </div><!--/.blog-item-->
	                        
	                    <div class="blog-item">
	                        <div class="row">
	                             <div class="col-sm-2">
	                                <div class="entry-meta"> 
	                                    <span id="publish_date">07  JUNY</span>
	                                    <span><i class="fa fa-user"></i> <a href="#">John Doe</a></span>
	                                    <span><i class="fa fa-comment"></i> <a href="#">2 Comments</a></span>
	                                    <span><i class="fa fa-heart"></i><a href="#">56 Likes</a></span>
	                                </div>
	                            </div>
	                            <div class="col-sm-10 blog-content">
	                                <a href=""><img class="img-responsive img-blog" src="images/3.jpg" width="100%" alt="" /></a>
	                                <h4>Consequat bibendum quam liquam viverra</h4>
	                                <p>Curabitur quis libero leo, pharetra mattis eros. Praesent consequat libero eget dolor convallis vel rhoncus magna scelerisque. Donec nisl ante, elementum eget posuere a, consectetur a metus. Proin a adipiscing sapien. Suspendisse vehicula porta lectus vel semper. Nullam sapien elit, lacinia eu tristique non.posuere at mi. Morbi at turpis id urna ullamcorper ullamcorper.</p>
	                                <a class="btn btn-primary readmore">Read More <i class="fa fa-angle-right"></i></a>
	                            </div>
	                        </div>    
	                    </div><!--/.blog-item-->
	                        
	                    <ul class="pagination pagination-lg">
	                        <li><a href="#"><i class="fa fa-long-arrow-left"></i>Previous Page</a></li>
	                        <li class="active"><a href="#">1</a></li>
	                        <li><a href="#">2</a></li>
	                        <li><a href="#">3</a></li>
	                        <li><a href="#">4</a></li>
	                        <li><a href="#">5</a></li>
	                        <li><a href="#">Next Page<i class="fa fa-long-arrow-right"></i></a></li>
	                    </ul><!--/.pagination-->
	                </div><!--/.col-md-8-->

	                <aside class="col-md-4">
	                    <div class="widget search">
	                        <form role="form">
	                            <input type="text" class="form-control search_box" autocomplete="off" placeholder="Search Here">
	                        </form>
	                    </div><!--/.search-->
	    				
	    				<div class="widget categories">
	                        <h3>Recent Comments</h3>
	                        <div class="row">
	                            <div class="col-sm-12">
	                                <div class="single_comments">
	                                    <img src="images/blog/avatar3.png" alt=""  />
	                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do </p>
	                                    <div class="entry-meta small muted">
	                                        <span>By <a href="#">Alex</a></span>
	                                    </div>
	                                </div>
	                                <div class="single_comments">
	                                    <img src="images/blog/avatar3.png" alt=""  />
	                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do </p>
	                                    <div class="entry-meta small muted">
	                                        <span>By <a href="#">Alex</a></span> 
	                                    </div>
	                                </div>
	                                <div class="single_comments">
	                                    <img src="images/blog/avatar3.png" alt=""  />
	                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do </p>
	                                    <div class="entry-meta small muted">
	                                        <span>By <a href="#">Alex</a></span>
	                                    </div>
	                                </div>
	                                
	                            </div>
	                        </div>                     
	                    </div><!--/.recent comments-->
	                     

	                    <div class="widget categories">
	                        <h3>Categories</h3>
	                        <div class="row">
	                            <div class="col-sm-6">
	                                <ul class="blog_category">
	                                    <li><a href="#">Computers <span class="badge">04</span></a></li>
	                                    <li><a href="#">Smartphone <span class="badge">10</span></a></li>
	                                    <li><a href="#">Gedgets <span class="badge">06</span></a></li>
	                                    <li><a href="#">Technology <span class="badge">25</span></a></li>
	                                </ul>
	                            </div>
	                        </div>                     
	                    </div><!--/.categories-->
	    				
	    				<div class="widget archieve">
	                        <h3>Archieve</h3>
	                        <div class="row">
	                            <div class="col-sm-12">
	                                <ul class="blog_archieve">
	                                    <li><a href="#"><i class="fa fa-angle-double-right"></i> December 2015 <span class="pull-right">(97)</span></a></li>
	                                    <li><a href="#"><i class="fa fa-angle-double-right"></i> November 2015 <span class="pull-right">(32)</span></a></li>
	                                    <li><a href="#"><i class="fa fa-angle-double-right"></i> October 2015 <span class="pull-right">(19)</span></a></li>
	                                    <li><a href="#"><i class="fa fa-angle-double-right"></i> September 2015 <span class="pull-right">(08)</span></a></li>
	                                </ul>
	                            </div>
	                        </div>                     
	                    </div><!--/.archieve-->
	    				
	                    <div class="widget tags">
	                        <h3>Tag Cloud</h3>
	                        <ul class="tag-cloud">
	                            <li><a class="btn btn-xs btn-primary" href="#">Apple</a></li>
	                            <li><a class="btn btn-xs btn-primary" href="#">Barcelona</a></li>
	                            <li><a class="btn btn-xs btn-primary" href="#">Office</a></li>
	                            <li><a class="btn btn-xs btn-primary" href="#">Ipod</a></li>
	                            <li><a class="btn btn-xs btn-primary" href="#">Stock</a></li>
	                            <li><a class="btn btn-xs btn-primary" href="#">Race</a></li>
	                            <li><a class="btn btn-xs btn-primary" href="#">London</a></li>
	                            <li><a class="btn btn-xs btn-primary" href="#">Football</a></li>
	                            <li><a class="btn btn-xs btn-primary" href="#">Porche</a></li>
	                            <li><a class="btn btn-xs btn-primary" href="#">Gadgets</a></li>
	                        </ul>
	                    </div><!--/.tags-->
	    				
	    				<div class="widget blog_gallery">
	                        <h3>Our Gallery</h3>
	                        <ul class="sidebar-gallery">
	                            <li><a href="#"><img src="images/blog/gallery1.png" alt="" /></a></li>
	                            <li><a href="#"><img src="images/blog/gallery2.png" alt="" /></a></li>
	                            <li><a href="#"><img src="images/blog/gallery3.png" alt="" /></a></li>
	                            <li><a href="#"><img src="images/blog/gallery4.png" alt="" /></a></li>
	                            <li><a href="#"><img src="images/blog/gallery5.png" alt="" /></a></li>
	                            <li><a href="#"><img src="images/blog/gallery6.png" alt="" /></a></li>
	                        </ul>
	                    </div><!--/.blog_gallery-->
	    			</aside>  
	            </div><!--/.row-->
	        </div>
	    </section><!--/#blog-->


	
</body>
</html>