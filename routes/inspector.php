<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('inspector')->user();

    //dd($users);

    return view('inspector.home');
})->name('home');

