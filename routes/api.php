<?php

use Illuminate\Support\Facades\Route;

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

Route::post('register', 'APIController@register');
Route::post('login', 'APIController@login');

Route::group(['middleware' => 'jwt.auth', 'prefix' => 'student'], function () {
    Route::get('/', 'APIController@index');
    Route::get('{id}/show', 'APIController@show');
    Route::put('{id}/update', 'APIController@update');
    Route::delete('{id}/delete', 'APIController@destroy');
    Route::post('store', 'APIController@store');
});
