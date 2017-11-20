<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', function () {
//    return view('public');
//});


Route::auth();

Route::get('/', 'PublicUserController@index');//ORIGINAL


Route::get('/user_delete', 'HomeController@index');//goes true home controller and Auth 


//Route::get('/test',function(){
//    return view('admin_template');
 //Route::resource('admin/users','AdminUserController');//admin/users - rest controlls the controller
Route::resource('user_create','HomeController');
Route::get('/user_create','HomeController@create');

//Route::get('/user_edit/{id}','HomeController@edit');


Route::get('/user_edit/{id}','AdminUserController@edit');//USER SNIPPET EDIT

Route::get('/user_display/{id}','HomeController@edit');




