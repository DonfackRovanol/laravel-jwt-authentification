<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use app\Http\Controllers\AuthController;

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

Route::post('signup', '\App\Http\Controllers\AuthController@signup');
Route::post('login', '\App\Http\Controllers\AuthController@login');

/*Route::group(['middleware' => 'api'], function () {

    Route::post('login', 'AuthController@login');
    Route::post('signup', '\App\Http\Controllers\AuthController@signup');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');

});*/
