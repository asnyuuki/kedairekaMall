<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

Route::get('/', function () {
    return redirect()->route('index');
})->name('/');
Route::prefix('dashboard')->group(function () {
    Route::view('index', 'dashboard.index')->name('index');
    Route::view('dashboard-02', 'dashboard.dashboard-02')->name('dashboard-02');
});
Route::view('comingsoon', 'comingsoon.comingsoon')->name('comingsoon');
Route::view('landing-page', 'pages.landing-page')->name('landing-page');

Route::prefix('authentication')->group(function () {
    Route::view('login-bs-validation', 'authentication.login-bs-validation')->name('login-bs-validation');
    Route::view('sign-up', 'authentication.sign-up')->name('sign-up');
    Route::view('forget-password', 'authentication.forget-password')->name('forget-password');
    Route::view('reset-password', 'authentication.reset-password')->name('reset-password');
});