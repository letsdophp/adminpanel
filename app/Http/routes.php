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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

/**
 * USER
 */
Route::get('admin/user', ['as' => 'adminUserIndex', 'uses' =>  'Admin\UserController@index']);
Route::get('admin/user/index', ['as' => 'adminUserIndexComplete', 'uses' =>  'Admin\UserController@index']);
Route::get('admin/user/profile', ['as' => 'adminUserProfile', 'uses' =>  'Admin\UserController@profile']);
Route::get('admin/user/detail/{id}', ['as' => 'adminUserDetail', 'uses' => 'Admin\UserController@detail']);
Route::post('admin/user/ajaxChangeState/{id}', ['as' => 'admin.user.ajax_change_state', 'uses' => 'Admin\UserController@ajaxChangeState']);
Route::post('admin/user/ajaxDelete/{id}', ['as' => 'admin.user.ajax_delete', 'uses' => 'Admin\UserController@ajaxDelete']);

Route::get('admin/user/edit/{id}', ['as' => 'adminUserEdit', 'uses' => 'Admin\UserController@edit']);
Route::post('admin/user/edit/{id}', ['as' => 'adminUserEdit', 'uses' => 'Admin\UserController@edit']);

Route::get('admin/user/add/', ['as' => 'adminUserAdd', 'uses' => 'Admin\UserController@add']);
Route::post('admin/user/add/', ['as' => 'adminUserAdd', 'uses' => 'Admin\UserController@add']);
