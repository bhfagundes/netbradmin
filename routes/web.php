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


Route::get('/', function () {
    return view('site/index');
});

Route::get('/contato', function () {
    return view('site/contato');
});

Route::get('/planos', 'SiteController@planos');

Auth::routes();

Route::get('/home', 'HomeController@index');