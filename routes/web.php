<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/dashboard',function(){
    return view('dashboard');
});


Route::get('/studentView',function(){
    return view('studentView');
});

Route::get('/studentAbout',function(){
    return view('studentAbout');
});

Route::get('/studentAdd',function(){
    return view('studentAdd');
});

Route::get('/studentEdit',function(){
    return view('studentEdit');
});

Route::get('/help',function(){
    return view('help');
});

Route::get('/analytics',function(){
    return view('analytics');
});