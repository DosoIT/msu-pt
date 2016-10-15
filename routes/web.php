<?php
Route::get('/', function () {
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

Route::resource('editPh', 'NoomController');

Route::resource('addPortfolio', 'NoomController@addPortfolio');
Route::resource('editPortfolio', 'NoomController@editPortfolio');
Route::resource('managePortfolio', 'NoomController@managePortfolio');

//noom  manage Database
Route::resource('manageProfile', 'ManageProfileController');
Route::resource('profile', 'ProfileController');


Route::get('/logout', function () {
    session()->forget('chk');
    return view('layouts.home');
});
Route::get('/ability', function () {
    return view('lin.ability');
});
Route::get('/edit', function () {
    return view('lin.edit_profileEmployer');
});

Auth::routes();
Route::get('/home', 'HomeController@index');

Route::resource('postEmployer','Employer\ManageEmployerController');
Route::resource('showpostEmployer','Employer\ShowPostController');

//Edit Profile Employer
Route::resource('editprofileEmployer', 'Employer\EditProfileController');



