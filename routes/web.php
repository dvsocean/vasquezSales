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


