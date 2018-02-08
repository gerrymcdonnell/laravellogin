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

//default route/page
Route::get('/', function () {
    //return view('welcome');

    //check if usr logged in
    /*if(Auth::check()){
        return "the user is logged in";
    }*/

    //not for use here but eredirect user to page they were going to
    /*if(Auth::attempt('username'=>$username,'password'=>$password)){
        return redirect()->intended();
    }*/

});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/posts', 'PostsController');
