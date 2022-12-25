<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('landingpage.index');
});

Route::get('/learningpaths', function () {
    return view('landingpage.pages.learning');
});

Route::get('/subcriptions', function () {
    return view('landingpage.pages.price');
});

Route::get('/contactus', function () {
    return view('landingpage.pages.contact');
});

Route::get('/home', function () {
    return view('home.index');

});

Route::get('/dashboard', function () {
    return view('dashboards.index');

});
