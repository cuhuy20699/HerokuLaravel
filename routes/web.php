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

Route::resource('user','UsersController');

//
Route::get('/', 'AdminController@index');

Route::get('/delete/id', 'UsersController@destroy');
//
//Route::get('/loginAdmin', 'AdminController@loginAdmin');
//
//Route::get('/listUserAdmin', 'AdminController@listUser');
//
//Route::get('/formUserAdmin', 'AdminController@formUser');