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
Route::get('/', 			['as'	=> 'login',		'uses'	=>'AuhtController@login']);
Route::get('/register',		['as'	=> 'register',	'uses'	=>'AuhtController@register']);
Route::post('/check_reg',	['as'	=> 'check_reg',	'uses'	=>'AuhtController@check_reg']);
Route::post('/login',		['as'	=> 'gologin',	'uses'	=>'AuhtController@gologin']);
Route::get('/index',		['as'	=> 'dashboard',	'uses'	=>'UserController@index']);