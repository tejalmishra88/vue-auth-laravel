<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('authenticate', 'AuthenticateController@authenticate');
Route::get('getnames1', 'Tasks1Controller@getnames');
Route::post('saves1', 'tasks1controller@savenames');
Route::post('tasks5', 'tasks1controller@delete');
Route::post('editapi', 'tasks1controller@edit');
Route::post('getrecordbyidapi', 'tasks1controller@getrecordbyid');

Route::group(['middleware' => 'jwt.auth'], function()
{
    Route::get('user', 'UserController@show');
    Route::get('getnames2', 'Tasks1Controller@getnames');
    Route::post('user/profile/update', 'UserController@updateProfile');
    Route::post('user/password/update', 'UserController@updatePassword');
});

