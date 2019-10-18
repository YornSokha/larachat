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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
// File: routes/api.php
Route::post('authenticate', 'ChatkitController@authenticate');
Route::get('users', 'ChatkitController@getUsers');
Route::post('message', 'ChatkitController@sendMessage');
