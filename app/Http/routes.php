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
use Illuminate\Support\Facades\Auth;
Route::get('/', function () {
   return view('welcome');

    // $user = Auth::user();
    // if ($user->isAdmin()){
    //     echo"user is admin";
    // }

});
Route::get('/admin', 'AdminController@index');

Route::auth();

Route::get('/home', 'HomeController@index');


Route::get('/admin/user/roles',['middleware' =>['role','auth','web'],function(){
    return "middleware role";
}]);