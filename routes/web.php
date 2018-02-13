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
    return view('welcome');
});

Auth::routes();

//Route::get('/', 'HomeController@index')->name('home');

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/posts', 'PostsController');


//middleware
Route::group(['middleware'=>'admin'], function(){

    Route::get('/admin', function(){
        return view('admin.index');
    });

    Route::name('admin')->resource('/admin/users', 'AdminUsersController');
    Route::name('admin')->resource('/admin/posts', 'AdminPostsController');
});

