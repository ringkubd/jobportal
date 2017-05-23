<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('assist')->user();

    //dd($users);

    return view('assist.home');
})->name('home');

