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

// File: routes/web.php
Route::get('/', 'ChatkitController@index');
Route::post('/', 'ChatkitController@join');
Route::get('chat', 'ChatkitController@chat')->name('chat');
Route::post('logout', 'ChatkitController@logout')->name('logout');