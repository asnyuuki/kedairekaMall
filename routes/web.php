<?php

use Illuminate\Support\Facades\Route;

Route::view('comingsoon', 'comingsoon.comingsoon')->name('comingsoon');
Route::view('landing-page', 'pages.landing-page')->name('landing-page');
Route::prefix('authentication')->group(function () {
    Route::view('login-bs-validation', 'authentication.login-bs-validation')->name('login-bs-validation');
});