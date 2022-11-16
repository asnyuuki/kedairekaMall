<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

Route::get('/', function () {
    return redirect()->route('index');
})->name('/');
Route::view('comingsoon', 'comingsoon.comingsoon')->name('comingsoon');
Route::view('landing-page', 'pages.landing-page')->name('landing-page');
Route::prefix('authentication')->group(function () {
    Route::view('login-bs-validation', 'authentication.login-bs-validation')->name('login-bs-validation');
});