<?php
Route::get('/', function () {
    return view('layouts.banner');
});
Route::get('/profiles', function () {
    return view('layouts.profiles');
});
Route::get('/home', function (){
    return view('home');
});
Route::get('/homepage', function () {
    return view('layouts.home');
});
Route::get('/employer',function (){
    return view('layouts.employer');
});
Route::get('/show_pt',function (){
    return view('layouts.show_pt');
});
Route::get('/employer_dt',function (){
    return view('layouts.employer_detail');
});
Route::get('/show_all_pt',function (){
    return view('layouts.show_all_pt');
});
Route::get('/create_account',function (){
    return view('layouts.create_account');
});
//noom  manage Database
//โปรไฟล์
Route::resource('manageProfile', 'ManageProfileController');
Route::resource('profile', 'ProfileController');

//ผลงาน
Route::resource('addPortfolio','ManagePortFolioController');
Route::resource('managePortfolio', 'ProfileController@showmanagePF');

//ค้นหา
Route::resource('search','SearchController');



Route::get('/logout', function () {
    session()->forget('chk');
    return view('layouts.home');
});
//
//Route::get('/logout', function () {
//    return view('home');
//});
Route::get('/ability', function () {
    return view('lin.ability');
});
Route::get('/edit', function () {
    return view('lin.edit_profileEmployer');
});
Route::get('/editProfileEmp', function () {
    return view('lin.profile');
});


Auth::routes();
Route::get('/home', 'HomeController@index');

Route::resource('postEmployer','Employer\ManageEmployerController');
Route::resource('showpostEmployer','Employer\ShowPostController');
//Profile Employer
Route::resource('editProfileEmployer', 'Employer\EditProfileController');






