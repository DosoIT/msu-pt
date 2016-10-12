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
Route::get('/detail_employer', function () {
    return view('lin.detail_employer');
});
Route::get('/post', function () {
    return view('lin.post_employer');
});
Route::get('/editprofile', function () {
    return view('lin.edit_profileEmployer');
});
Route::get('/employer_pro', function () {
    return view('lin.profileEmployer');
});
Route::get('/editpostemployer', function () {
    return view('lin.editpost_employer');
});
Auth::routes();
Route::get('/home', 'HomeController@index');

