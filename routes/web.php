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

Route::get('/', 'Common\DashboardController@index')->name('index');;


Route::get('login', 'SessionsController@create')->name('login');
Route::post('login', 'SessionsController@store')->name('login');
Route::get('logout', 'SessionsController@destroy')->name('logout');

Route::get('role', 'System\RoleController@create')->name('role');
Route::post('role', 'System\RoleController@store')->name('role');