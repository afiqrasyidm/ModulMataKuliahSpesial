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
<<<<<<< HEAD
=======

Route::get('/page', function () {
    return view('page');
});

>>>>>>> 33b921fbcb99ece4472c4ccdf51180f6071ddd5b
Route::get('/', 'MainController@index');

Route::get('/login', [ 'as' => 'login', 'uses' => 'MainController@login']);

