<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('jobseeker')->user();

    //dd($users);

    return redirect('jobseeker');
})->name('jshome');

