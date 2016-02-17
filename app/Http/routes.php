<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});

//后台管理
Route::group(['prefix'=>'admin','namespace'=>'Admin'],function(){
    //主页
    Route::get('/','IndexController@index');
    //管理员
    Route::group(['prefix'=>'admin'],function(){
        Route::get('/','AdminController@index');
    });
    //文章
    Route::group(['prefix'=>'articles'],function(){
        Route::get('/','ArticlesController@index');
    });
});
