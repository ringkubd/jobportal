<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','PublicController@index');

//homepage search

Route::get('search', 'PublicController@homepage_search');
Route::get('seacrchable', 'PublicController@filter');

// Auth::routes();
Route::get('category/{id}','PublicController@get_job_by_cat');
Route::get('showdetails/{id}','PublicController@jobsdescription');
Route::get('relatedJobs/','PublicController@relatedJobs');

Route::get('/home', 'HomeController@index');

Route::group(['prefix' => 'employer','middleware' => ['logEmployer','logGuest']], function () {
  Route::get('/login', 'EmployerAuth\LoginController@showLoginForm');
  Route::post('/login', 'EmployerAuth\LoginController@login');
  Route::post('/logout', 'EmployerAuth\LoginController@logout');

  Route::get('/register', 'EmployerAuth\RegisterController@showRegistrationForm');
  Route::post('/register', 'EmployerAuth\RegisterController@register');

  Route::post('/password/email', 'EmployerAuth\ForgotPasswordController@sendResetLinkEmail');
  Route::post('/password/reset', 'EmployerAuth\ResetPasswordController@reset');
  Route::get('/password/reset', 'EmployerAuth\ForgotPasswordController@showLinkRequestForm');
  Route::get('/password/reset/{token}', 'EmployerAuth\ResetPasswordController@showResetForm');
  //Route::get('/{slug}', 'employerController@show');
  Route::get('/profile/{id}', 'employerController@show');
  Route::get('managejobs','jobController@getjobsinfo');

  Route::get('edit_jobs','jobController@job_edit');

  Route::get('save_edit_jobs','jobController@edit_job_employer_dashboard');

  Route::get('postjob','jobController@post_job');
  Route::get('showjob','jobController@show_job_on_emp_dashboard');

  Route::get('delete_job','jobController@delte_job_employer_dashboard');

  Route::get('apllied_job','emp_applied_job_controller@applied_job');
  Route::get('/', 'emphomeController@showhomepage');

  //tariqul 
  Route::get('details', 'jobController@showJobDetails');

  Route::get('/cv/{id}', 'emphomeController@applicantcv');
   Route::get('/cv/{id}/{jobid?}', 'emphomeController@applicantcv');

  //message 
  Route::get('inbox','messageController@empInbox')->middleware('employer');
  Route::get('sent','messageController@empSent')->middleware('employer');
  Route::get('draft','messageController@empDraft')->middleware('employer');
  Route::get('Trash','messageController@empTrash')->middleware('employer');
  Route::get('newmessage','messageController@empCreateNewMessage')->middleware('employer');
  Route::get('sendmessage','messageController@sendMessage')->middleware('employer');
  Route::post('getAppliedJobseekerList','messageController@getAppliedJobseekerList')->middleware('employer');
  Route::post('messageoption','messageController@empmessageOption')->middleware('employer');
  Route::get('replay','messageController@EmpreplayMessage')->middleware('employer');
   Route::get('/applicantlist/{id?}', 'emphomeController@applicant_list');
  Route::post('shorted_list', 'emp_applied_job_controller@shorlisted_candidate');


  //assistant 
  // Route::get('registerassis','AssistController@showRegistrationForm')->middleware('employer');
  // Route::post('registerassis/create','AssistController@create')->middleware('employer');
  // Route::get('/{id}/login','assistLoginController@showLoginForm');
  // Route::post('/assist/login','assistLoginController@login');

});

Route::group(['prefix' => 'jobseeker','middleware' => ['logEmployer','logGuest']], function () {
  Route::get('/login', 'JobseekerAuth\LoginController@showLoginForm');
  Route::post('/login', 'JobseekerAuth\LoginController@login');
  Route::post('/logout', 'JobseekerAuth\LoginController@logout');

  Route::get('/register', 'JobseekerAuth\RegisterController@showRegistrationForm');
  Route::post('/register', 'JobseekerAuth\RegisterController@register');

  Route::post('/password/email', 'JobseekerAuth\ForgotPasswordController@sendResetLinkEmail');
  Route::post('/password/reset', 'JobseekerAuth\ResetPasswordController@reset');
  Route::get('/password/reset', 'JobseekerAuth\ForgotPasswordController@showLinkRequestForm');
  Route::get('/password/reset/{token}', 'JobseekerAuth\ResetPasswordController@showResetForm');

  Route::get('personal', function() {
      return view('jobseeker.personal');
  });
  Route::get('personal_details', function() {
      return view('jobseeker.home');
  });

  Route::get('/','alljobsController@index')->name('jshome');
  Route::get('/showjobs/{id}','alljobsController@show');
  Route::get('/managejobs','alljobsController@showalljobs');

  Route::get('/resume/edit', 'jobseekerController@index');
  Route::put('infoupdate','jobseekerController@infoupdate');

  Route::get('/alljobsshow/{id}','alljobsController@jobsdescription');
  Route::get('/apply','alljobsController@applyjob');

  Route::get('/blockEmployer','jobseekerController@employerlist');
  Route::get('/block/{id}','jobseekerController@blockemp');
  Route::get('/unblock/{id}','jobseekerController@unblockemp');

  Route::get('/followEmployer','jobseekerController@femployerlist');
  Route::get('/follow/{id}','jobseekerController@followemp');
  Route::get('/unfollow/{id}','jobseekerController@unfollowemp');

  Route::get('cv','cvController@cv');
  Route::post('imageupload','jobseekerController@jobseeker_img_upload');

  Route::get('uloadingcv','uploadingCvController@uploadingPage');
  Route::post('cvUpload','uploadingCvController@cvUpload');
  Route::get('showuploadedcv','uploadingCvController@showuploadedcv');
  Route::get('createcvdoc','uploadingCvController@createDoc');

  Route::get('inbox','messageController@jsInbox')->middleware('jobseeker');
  Route::get('sent','messageController@empSent')->middleware('jobseeker');
  Route::get('draft','messageController@empDraft')->middleware('jobseeker');
  Route::get('Trash','messageController@empTrash')->middleware('jobseeker');
  Route::get('newmessage','messageController@empCreateNewMessage')->middleware('jobseeker');
  Route::get('sendmessage','messageController@sendMessage')->middleware('jobseeker');

  Route::post('messageoption','messageController@jsmessageOption')->middleware('jobseeker');
  Route::get('replay','messageController@jsmessageReplay')->middleware('jobseeker');
  Route::get('portofolio/{id}','portfolioController@index');
  Route::POST('porto/contact','portfolioController@contact_me');
});


Route::get('resume', function () {
    return view('employer.resume');
});

Route::resource('editemployer','employerController');


Route::get('/showdata','show_proofile_controller@showdata');

Route::post('/uploadimage','show_proofile_controller@getimage');


Route::get('jobseeker/home', function() {
      return redirect(url('jobseeker/login'));
  })->name('joslogin');


  
  Route::get('relation',function(){
    return view('employer.employer');
  });



  // Ajax request route
  Route::get('ajax/district', 'jobController@return_district_by_division_id');


//admin panel

Route::group(['prefix' => 'inspector'], function () {
  Route::get('/login', 'InspectorAuth\LoginController@showLoginForm');
  Route::post('/login', 'InspectorAuth\LoginController@login');
  Route::post('/logout', 'InspectorAuth\LoginController@logout');

  Route::get('/register', 'InspectorAuth\RegisterController@showRegistrationForm');
  Route::post('/register', 'InspectorAuth\RegisterController@register');

  Route::post('/password/email', 'InspectorAuth\ForgotPasswordController@sendResetLinkEmail');
  Route::post('/password/reset', 'InspectorAuth\ResetPasswordController@reset');
  Route::get('/password/reset', 'InspectorAuth\ForgotPasswordController@showLinkRequestForm');
  Route::get('/password/reset/{token}', 'InspectorAuth\ResetPasswordController@showResetForm');
    
    Route::get('publicoption','Inspector\PublicOption@publicoption');//educatin lavel  search

  Route::get('/','Inspector\DashboardController@index');

  //category manage start....
  Route::get('category','Inspector\CategoryController@index');//dashboard category list page
  Route::post('managecategory','Inspector\CategoryController@managecategory');//dashboard category crud page
  Route::get('catsearch','Inspector\CategoryController@catsearch');//dashboard category search page
  //category manage end....

  //industrytype manage start....
  Route::get('industrytype','Inspector\IndustryTypeController@index');//dashboard industrytype list page
  Route::post('manageindustrytype','Inspector\IndustryTypeController@manageindustrytype');//dasboard industrytype crud page
  Route::get('industrysearch','Inspector\IndustryTypeController@industrysearch');//dashboard industrytype search page
  //industrytype manage end....

  //manage jobseeker using admin dashboard start........
  Route::get('jobseeker','inspector\JobseekerController@index');//dashboard jobseeker list
  Route::post('managejobseeker','inspector\JobseekerController@managejobseeker');//dashboard jobseeker manage crud,status,view......
  Route::get('jobseekersearch','inspector\JobseekerController@jobseekersearch');//dashboard jobseeker search......


  //manage jobseeker using admin dashboard end........

  //manage employer using admin dashboard start........
Route::get('employer','Inspector\EmployerCon@index');//dashboard employer list
Route::post('manageemployer','Inspector\EmployerCon@manageemployer');//dashboard employer manage crud,status,view......
Route::get('employersearch','Inspector\EmployerCon@employersearch');//dashboard employer search......
//manage employer using admin dashboard end.....

//country division district and area management start
Route::get('location','Inspector\LocationManagement@index');//present country list
Route::post('managecountry','Inspector\LocationManagement@managecountry');//country crud 
Route::get('countrysearch','Inspector\LocationManagement@countrysearch');//dashboard country search page


Route::get('divisionlist','Inspector\LocationManagement@divisionlist');//present division list

Route::post('managedivision','Inspector\LocationManagement@managedivision');//division crud
Route::get('divisionsearch','Inspector\LocationManagement@divisionsearch');//dashboard division search page

Route::get('districtlist','Inspector\LocationManagement@districtlist');//present disrtrict list
Route::get('districtsearch','Inspector\LocationManagement@districtsearch');//dashboard division search page
Route::post('managedistrict','Inspector\LocationManagement@managedistrict');//district crud


Route::get('arealist','Inspector\LocationManagement@arealist');//present area list
Route::post('managearea','Inspector\LocationManagement@managearea');// area crud
Route::get('areasearch','Inspector\LocationManagement@areasearch');// area search

Route::get('showcountry','Inspector\onchangeController@showcountry');//on change using for cdda it can used by other routes...

Route::get('showlevelofeducation','Inspector\onchangeController@showlevelofeducation');//on change using for cdda it can used by other

// routes...
//country division district and area management end

Route::get('levelofeducation','Inspector\Manageeducationcontroller@index');//present education lavel list
Route::post('managelevelofeducation','Inspector\Manageeducationcontroller@managelevelofeducation');//educatin lavel  crud 
Route::get('manedusearch','Inspector\Manageeducationcontroller@manedusearch');//educatin lavel  search

Route::get('examtitle','Inspector\Manageeducationcontroller@examtitlelist');//present education lavel list
Route::post('manageexam','Inspector\Manageeducationcontroller@manageexam');//educatin lavel  crud 
Route::get('examtitlesearch','Inspector\Manageeducationcontroller@examtitlesearch');//educatin lavel  search

Route::get('groupormajors','Inspector\Manageeducationcontroller@groupormajorlist');//present education lavel list
Route::post('managegroupormajor','Inspector\Manageeducationcontroller@managegroupormajor');//educatin lavel  crud 
Route::get('groupormajorsearch','Inspector\Manageeducationcontroller@groupormajorsearch');//educatin lavel  search

Route::get('publicoption','Inspector\PublicOption@publicoption');//educatin lavel  search

//::::::::::::::job publicity  section start ::::::::::::::::::::::
Route::get('job','Inspector\JobManagement@job_index');
Route::get('job_published','Inspector\JobManagement@jobpublshed');
Route::get('publishedjob','Inspector\JobManagement@job_all_published');
Route::get('trashjob','Inspector\JobManagement@trashjob');
Route::get('view_posted_job/{id}','Inspector\JobManagement@posted_job_index');
Route::get('view_published_job/{id}','Inspector\JobManagement@published_job_index');//educatin lavel  search
Route::get('view_trashed_job/{id}','Inspector\JobManagement@trashed_job_index');


//theme option start
Route::get('managetheme','Inspector\themeoptionController@index');
Route::post('managethemeall','Inspector\themeoptionController@managetheme');
//theme option end


});


//email verification
Route::get('sendVerifymail/{email}/{token}','EmployerAuth\RegisterController@SendMailDone')->name('SendMailDone');
Route::group(['prefix' => 'assist'], function () {
  Route::get('/login', 'AssistAuth\LoginController@showLoginForm');
  Route::post('/login', 'AssistAuth\LoginController@login');
  Route::post('/logout', 'AssistAuth\LoginController@logout');

  Route::get('employer/assistregister', 'AssistAuth\RegisterController@showRegistrationForm');
  Route::post('/register', 'AssistAuth\RegisterController@register');

  Route::post('/password/email', 'AssistAuth\ForgotPasswordController@sendResetLinkEmail');
  Route::post('/password/reset', 'AssistAuth\ResetPasswordController@reset');
  Route::get('/password/reset', 'AssistAuth\ForgotPasswordController@showLinkRequestForm');
  Route::get('/password/reset/{token}', 'AssistAuth\ResetPasswordController@showResetForm');
});

//online check

Route::get('setonline','IsOnlineController@IsOnline');
Route::get('getAllonlineUser','IsOnlineController@checkAllonlineUser');

//public home statastics
Route::get('public/statastics','PublicController@public_stastics');
// Contact Page
Route::get('contact','support@index');
Route::get('contact_message','support@sendSupportMessage');