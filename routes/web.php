<?php

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
// All page User
Route::get('/', function () {
    return view('welcome');
});
Route::get('home', function(){
	return view('page.home');
});
Route::get('about', function(){
	return view('page.about');
});
Route::get('blog', function(){
	return view('page.blog');
});
Route::get('blog-single', function(){
	return view('page.blog-single');
});
Route::get('contact', function(){
	return view('page.contact');
});
Route::get('hotel', function(){
	return view('page.hotel');
});
Route::get('service', function(){
	return view('page.service');
});
Route::get('tour', function(){
	return view('page.tour');
});

// Page Admin
Route::group(['prefix' => 'admin'], function() {
    Route::get('home', function() {
        return view('admin.home');
    });
    //table
    Route::get('table', function() {
        return view('admin.table');
    });
    //chart 
    Route::get('chart', function() {
        return view('admin.chart');
    });
});