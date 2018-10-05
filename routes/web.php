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



Route::get('/', function () {
    return view('welcome');
})->name('homePage');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route to profile page
Route::get('/profile', function(){
    return view('profile.profile');
})->name('profile');

//update profile
Route::post('/updateProfile', 'MemberController@update');


//admin page
Route::get('/admin', function(){
    return view('admin_page.index');
})->name('admin');

//Desired
Route::post('/desired', 'DesiredController@update');

//Front page content
Route::get('/frontPageContent', function(){
    return view('admin_page.front_page_content.front_page_content');
})->name('front_page_content');
Route::post('/front_page_content', 'FrontPageController@update');

//quad content
Route::get('/quad_content', function(){
    return view('admin_page.quad_content.quad_content');
})->name('quad_content');
Route::post('/updateQuads', 'FrontPageController@updateQuadContent');