<?php

use Illuminate\Http\Request;

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
Route::post('login', 'AuthController@login');
Route::group(['middleware' => 'jwt.auth', 'prefix' => 'auth'], function ($router) {


    Route::post('logout', 'AuthController@logout');
    Route::post('send-sms', 'Api\UserController@sendSms');
    Route::post('register', 'RegisterController@register');

});

