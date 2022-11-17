<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

Route::get('/', function () {
    return redirect()->route('index');
})->name('/');

//Language Change
Route::get('lang/{locale}', function ($locale) {
    if (! in_array($locale, ['en', 'id'])) {
        abort(400);
    }   
    Session()->put('locale', $locale);
    Session::get('locale');
    return redirect()->back();
})->name('lang');

//dashboard
Route::prefix('dashboard')->group(function () {
    Route::view('index', 'dashboard.index')->name('index');
    Route::view('dashboard', 'dashboard.dashboard')->name('dashboard');
});

Route::view('comingsoon', 'comingsoon.comingsoon')->name('comingsoon');
// Route::view('landingpage', 'pages.landingpage')->name('landingpage');

Route::prefix('authentication')->group(function () {
    Route::view('login', 'authentication.login')->name('login');
    Route::view('sign-up', 'authentication.sign-up')->name('sign-up');
    Route::view('forget-password', 'authentication.forget-password')->name('forget-password');
    Route::view('reset-password', 'authentication.reset-password')->name('reset-password');
});