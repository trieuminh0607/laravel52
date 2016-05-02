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

Route::get('/', function () {
    return view('welcome');
});


Route::get('administration/login', ['as' => 'administration/login','uses' => 'LoginController@showLoginAction']);

Route::post('administration/login', ['as' => 'administration/login','uses' => 'LoginController@loginAction']);

Route::get('administration/logout', ['as' => 'administration/logout','uses' => 'LoginController@logoutAction']);

Route::group(['middleware' => 'auth'], function (){
    Route::group(['prefix' => 'administration'], function (){
        Route::get('/', function (){
            return view('admin.home.home');
        });
    });

    Route::group(['prefix' => 'administration/category'], function (){
        Route::get('/', ['as'=> 'administration/category', 'uses' => 'CategoryController@indexAction']);
        Route::get('add', ['as'=> 'administration/category/add', 'uses' => 'CategoryController@viewAddAction']);
        Route::post('add', ['as'=> 'administration/category/add', 'uses' => 'CategoryController@doAddAction']);
        Route::get('delete/{id}', ['as'=> 'administration/category/delete', 'uses' => 'CategoryController@deleteAction'])->where('id', '[0-9]+');
    });

    Route::group(['prefix' => 'administration/user'], function (){
        Route::get('/', ['as'=> 'administration/user', 'uses' => 'UserController@indexAction']);
        Route::get('add', ['as'=> 'administration/user/add', 'uses' => 'UserController@viewAddAction']);
        Route::post('add', ['as'=> 'administration/user/add', 'uses' => 'UserController@doAddAction']);
        Route::get('delete/{id}', ['as'=> 'administration/user/delete', 'uses' => 'UserController@deleteAction'])->where('id', '[0-9]+');
    });
});






