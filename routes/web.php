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
//ADIM
Route::get('/admin', 'AdminController@index');

Route::resource('user','UsersController');

Route::resource('/products','ProductController');

Route::resource('/smartphone','ProductSmartPhonesController');

Route::get('/loginAdmin', 'AdminController@loginAdmin');

Route::get('/chart', 'ChartController@index');

Route::get('/demo','AdminController@demoSearch');

Route::post('/search', 'AdminController@searchPhone');

Route::resource('/order','OrderController');
// END ADMIN

Route::get('/homepage','Client\HomepageController@index');

Route::get('/listItem','Client\HomepageController@listItem');

Route::get('productDetail/{id}','Client\ClientController@productDetail');

Route::resource('/shoppingCart','Client\OrderDetailController');


