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
    return view('admin_page.admin_index.index');
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

//Tiny images
Route::get('/editSliders', function(){
    return view('admin_page.slider_images.slider_images');
})->name('editSliders');
Route::post('/updateSliderImages', 'TinyController@updateSliders');

//edit buttons
Route::get('/editButtons', function(){
    return view('admin_page.buttons.buttons');
})->name('editButtons');



//category buttons
Route::get('/cat_button_one', function(){
    return view('home_page_categories.cat_one');
});

Route::get('/cat_button_two', function(){
    return view('home_page_categories.cat_two');
});

Route::get('/cat_button_three', function(){
    return view('home_page_categories.cat_three');
});

Route::get('/cat_button_four', function(){
    return view('home_page_categories.cat_four');
});



//Multiple routes for Bicons route
Route::post('/updateBicons', 'BiconController@update');

//Update quad icons
Route::post('/quads', 'QuadController@updateQuadIcons');

//update montior images
Route::post('/monitors', 'MonitorController@updateMonitors');


//profile page content
Route::get('/editProfilePage', 'ProfileController@showPage')->name('editProfilePage');
