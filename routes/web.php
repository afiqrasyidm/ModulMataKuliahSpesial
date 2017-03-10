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
Route::get('/', 'MainController@index');

Route::get('/login-sso', ['as' => 'login-sso', 'uses' => 'MainController@login_sso']);

Route::get('/logout-sso', ['as' => 'logout-sso', 'uses' => 'MainController@logout_sso']);