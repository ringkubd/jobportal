@extends('jobseeker.ample.index')
@section('title')
Manage Jobs
@endsection
@section('style')
{!!Html::style('css/managejobs.css')!!}
@endsection
@section('script')
{{--asset('js/managejob.js')--}}
{!!Html::script('js/uploadingCv.js')!!}
@endsection
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">

<div class="row"> {{-- strat main row --}}


	<div class="col-sm-12">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<i class="fa fa-file" aria-hidden="true"></i>CV Attacment
			</div>
			<div class="panel-body">
				<div class="row"> {{-- start-first-row-on-panel-content --}}
					<div class="col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3">
						<div class="row">
						<style>
							.cv-area {
								    text-align: center;
								    width: 500px;
								    height: 100%;
								    border: 2px dashed #e5e5e5;
								    margin: 0 auto;
								}
								@media only screen and (max-width: 468px){
									.cv-area {
									    width: 80%;
									    height: 100%;
									}
								}
									
						</style>
							<div class="cv-area col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3" style="margin: 0 auto" id="cvPreview">

								{{ Html::image('icon-img/cv-icon.png','CV Icon',array('align'=>'middle','id'=>'preview2','height'=>'50%','width'=>'50%')) }}
									<div>
										@if($cv != 'no')
											<h1>
												<a href="storage/cv/{{$cv->cv_name}}">{{Auth::guard('jobseeker')->user()->name.'_'.$cv->cv_name}}
												</a>
											</h1>
										@else
										<span class="text-priamry">No Cv Found</span>
										@endif
									</div>
									
							</div>
						</div>
						
					</div>
				</div>{{-- start-first-row-on-panel-content --}}

				<div class="clearfix" style="margin: 3px auto"></div>

				<div class="row">{{-- start-second-row-on-panel-content --}}

					<div class="col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3 well">


						<form action="{{url('jobseeker/uloadingcv')}}" id="uploadCv" method="put" enctype="multipart/form-data">
	              			{{ csrf_field() }}
			                 <p><input type="file" class="form-control" name="inputCv" id="inputCv"></p>
			                 <input type="hidden" name="action" id="action" value="jobseeker_cv">
			                {{--  <button type="submit">Upload</button> --}}



			                 	<input class="btn btn-primary txt-center" type="submit" value="upload" id="uploadCvbtn">
			              </form>

            		</div>
				</div>{{-- start-second-row-on-panel-content --}}
			</div>
			<div class="panel-footer">Panel Footer</div>
		</div>

	</div>
	

</div> {{-- end main row --}}
        
@endsection