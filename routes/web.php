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
    return view('index');
});

Route::get('/index.html', function () {
    return view('index');
});

Route::get('/accordion.html', function () {
    return view('accordion');
});

Route::get('/auth-normal-sign-in.html', function () {
    return view('auth-normal-sign-in');
});

Route::get('/auth-sign-up.html', function () {
    return view('auth-sign-up');
});

Route::get('/breadcrumb.html', function () {
    return view('breadcrumb');
});

Route::get('/bs-basic-table.html', function () {
    return view('bs-basic-table');
});

Route::get('/button.html', function () {
    return view('button');
});

Route::get('/chart.html', function () {
    return view('chart');
});

Route::get('/color.html', function () {
    return view('color');
});

Route::get('/form-elements-component.html', function () {
    return view('form-element-component');
});

Route::get('/icon-themify.html', function () {
    return view('icon-themify');
});

Route::get('/label-badge.html', function () {
    return view('label-badge');
});

Route::get('/map-google.html', function () {
    return view('map-google');
});

Route::get('/notification.html', function () {
    return view('notification');
});

Route::get('/progress-bar.html', function () {
    return view('progress-bar');
});

Route::get('/sample-page.html', function () {
    return view('sample-page');
});

Route::get('/tabs.html', function () {
    return view('tabs');
});

Route::get('/tooltip.html', function () {
    return view('tooltip');
});

Route::get('/typography.html', function () {
    return view('typography');
});