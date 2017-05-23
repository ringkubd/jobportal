@extends('dashboard.layout.dashboard_layout')

@section('style')
{{--asset('js/Admin_Category.js')--}}
{!!Html::style('css/skill_bar_style.css')!!}
@endsection

@section('content')
<div class="col-md-9 col-sm-12 col-xs-12" style="margin-top:15px;">

	<div class="row">
		<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading">Site Analytics</div>
				<div class="panel-body">
					<div class="col-md-8 col-sm-12 col-xs-12">
					<div class="skill_name" id="skill_php">Total Jobseeker</div>
					<div class="skillbar_wrapper">
					 <div class="skillbar_bar" id="skillbar_php"></div>
					 <div class="skill_bar_percent">{{$show_details}}%</div>
					</div>

					<div class="skill_name" id="skill_asp">New Jobseeker</div>
					<div class="skillbar_wrapper">
					 <div class="skillbar_bar" id="skillbar_asp"></div>
					 <div class="skill_bar_percent">{{$show_newjobseeker}}%</div>
					</div>


					<div class="skill_name" id="skill_jsp">Total Employer</div>
					<div class="skillbar_wrapper">
					 <div class="skillbar_bar" id="skillbar_jsp"></div>
					 <div class="skill_bar_percent">{{$show_ShowEmployer}}%</div>
					</div>

					<div class="skill_name" id="skill_cakephp">Total Job</div>
					<div class="skillbar_wrapper">
					 <div class="skillbar_bar" id="skillbar_cakephp"></div>
					 <div class="skill_bar_percent">{{$show_ShowTotaljob}}%</div>
					</div>

					</div>

					<div class="col-md-4 col-sm-12 col-xs-12">
						<div class="span3">
						  <ul class="site-stats">
						    <li class="bg_lh"><i class="fa fa-user"></i> <strong>{{$show_details}}</strong> <small>Total Jobseeker </small></li>
						    <li class="bg_lh"><i class="fa fa-plus"></i> <strong>{{$show_newjobseeker}}</strong> <small>New Jobseeker </small></li>
						    <li class="bg_lh"><i class="fa fa-shopping-cart"></i> <strong>{{$show_ShowEmployer}}</strong> <small>Total Employer </small></li>
						    <li class="bg_lh"><i class="fa fa-tag"></i> <strong>{{$show_ShowTotaljob}}</strong> <small>Total Job</small></li>
						    <li class="bg_lh"><i class="fa fa-repeat"></i> <strong>{{$Show_pendingJob}}</strong> <small>Pending Job</small></li>
						    <li class="bg_lh"><i class="fa fa-globe"></i> <strong>{{$Show_PublishedJob}}</strong> <small>Publish Job</small></li>
						  </ul>
						</div>
					</div>
			</div>
		</div>


	</div>
	</div>

		<div class="row">
			<div class="col-md-6">
				<div class="widget-box">
					  <div class="widget-title bg_ly" data-toggle="collapse" href="#collapseG2">
						  <div class="panel panel-default">
						  	<div class="panel-heading"><span class="icon"><i class="fa fa-chevron-down"></i></span> Latest Jobs</div>
						 
						  <div class="panel-body">
						  <div class="widget-content nopadding collapse in" id="collapseG2">
						    <ul class="recent-posts">
						      <li>
						        <div class="user-thumb"> <img width="40" height="40" alt="User" src="{{URL::asset('images/employer_logo\slogo.png')}}"> </div>
						        <div class="article-post"> <span class="user-info"> By: john Deo / Date: 2 Aug 2012 / Time:09:27 AM </span>
						          <p><a href="#">This is a much longer one that will go on for a few lines.It has multiple paragraphs and is full of waffle to pad out the comment.</a> </p>
						        </div>
						      </li>
						      <li>
						        <div class="user-thumb"> <img width="40" height="40" alt="User" src="img/demo/av2.jpg"> </div>
						        <div class="article-post"> <span class="user-info"> By: john Deo / Date: 2 Aug 2012 / Time:09:27 AM </span>
						          <p><a href="#">This is a much longer one that will go on for a few lines.It has multiple paragraphs and is full of waffle to pad out the comment.</a> </p>
						        </div>
						      </li>
						      <li>
						        <div class="user-thumb"> <img width="40" height="40" alt="User" src="img/demo/av4.jpg"> </div>
						        <div class="article-post"> <span class="user-info"> By: john Deo / Date: 2 Aug 2012 / Time:09:27 AM </span>
						          <p><a href="#">This is a much longer one that will go on for a few lines.Itaffle to pad out the comment.</a> </p>
						        </div>
						      <li>
						        <button class="btn btn-warning btn-mini">View All</button>
						      </li>
						    </ul>
						  </div>
						  </div>
						</div>
					</div>
				</div>
			</div>


			<div class="col-md-6">
			  <!-- USERS LIST -->
			  <div class="panel panel-default">
			  	<div class="panel-heading">
			  	<span class="box-title">Top Employer</span>
				    <div class="box-header with-border pull-right">
				        <span class="label label-danger">8 New Members</span>
				        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
				        </button>
				        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
				        </button>
				    </div>
			    </div>
			    <!-- /.box-header -->
			    <div class="panel-body">
			    <div class="box-body no-padding">
			      <ul class="users-list clearfix">
			        <li>
			          <img src="dist/img/user1-128x128.jpg" alt="User Image">
			          <a class="users-list-name" href="#">Alexander Pierce</a>
			          <span class="users-list-date">Today</span>
			        </li>
			      </ul>
			      <!-- /.users-list -->
			    </div>
			    <!-- /.box-body -->
			    </div>
			    <div class="panel-footer text-center">
			      <a href="#">View All Users</a>
			    </div>
			    <!-- /.box-footer -->
			  <!--/.box -->
			</div>
			</div>
			<!-- /.col -->
			
	</div>


		</div>
	</div>

	<script type="text/javascript">
	$(document).ready(function(){
		
	$("#skillbar_php").animate({width:'{{$show_details}}%'},1500);
	$("#skillbar_asp").animate({width:'{{$show_newjobseeker}}%'},1500);
	$("#skillbar_jsp").animate({width:'{{$show_ShowEmployer}}%'},1500);
	$("#skillbar_cakephp").animate({width:'{{$show_ShowTotaljob}}%'},1500);

	});
	</script>

@endsection