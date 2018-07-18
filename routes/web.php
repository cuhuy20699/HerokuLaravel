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
Route::get('/', 'AdminController@index');

Route::resource('/user','UsersController');

Route::resource('/products','ProductController');

Route::get('/loginAdmin', 'AdminController@loginAdmin');

Route::get('/listOrderUser', 'AdminController@listOrderUser');

Route::get('/chart', 'ChartController@index');

Route::resource('/smartphone','ProductSmartPhonesController');

Route::get('/demo','AdminController@demoSearch');

Route::post('/search', 'AdminController@searchPhone');

Route::resource('/order','OrderController');

Route::get('/homepage','Client\HomepageController@index');
Route::get('/test','Client\HomepageController@test');

Route::get('/list1','Client\HomepageController@getListSmartPhone');
Route::get('/list2','Client\HomepageController@getListLaptop');
Route::get('/list3','Client\HomepageController@getListPC');
Route::get('/list4','Client\HomepageController@getListConsole');


Route::get('/intro','Client\HomepageController@index3');
Route::get('/contact','Client\HomepageController@index4');


//Route::get('/formUserAdmin', 'AdminController@formUser');