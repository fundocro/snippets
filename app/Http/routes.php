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
use Illuminate\Support\Facades\Input;
use App\Snippet;
Route::get('/', 'PublicUserController@index');//ORIGINAL


Route::get('/user_delete', 'HomeController@index');//goes true home controller and Auth 



Route::resource('user_create','HomeController');
Route::get('/user_create','HomeController@create');

//Route::get('/user_edit/{id}','HomeController@edit');


Route::get('/user_edit/{id}','AdminUserController@edit');//USER SNIPPET EDIT

Route::get('/user_display/{id}','HomeController@edit');

Route::get('/user_search','NameSearchController@index');


//Route::get('/resources_menu', 'AdminUserController@linux');
//Route::get('/resources_menu', 'AdminUserController@script');
Route::get('/resources_menu', 'AdminUserController@combined');

Route::any('/search',function(){
    $q = Input::get ( 'q' );
    $snippets = Snippet::where('name','LIKE','%'.$q.'%')->get();
    if(count($snippets) > 0)
        return view('user.name_search_result',compact('snippets'));
   else return view ('errors.504');//->withMessage('No Details found. Try to search again !');
});





























