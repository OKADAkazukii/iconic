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
    return view('welcome');
});
Auth::routes();
Route::prefix('admin')->group(function() {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@home')->name('admin.dashboard');
  });

Route::get('/user_index', 'AdminController@index');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home/pass_change', 'UserController@edit');

Route::get('/home/search', 'ContractorController@search');

Route::post('/home/test', 'ContractorController@test');

Route::get('/home/add_form', 'AddDBController@write');

Route::post('/home/add_form', 'AddDBController@submit');

Route::post('/home/add_form/add', 'AddDBController@add');

Route::get('/home/inquiry', 'InquiryController@index');

Route::get('/home/inquiry/{id}', 'InquiryController@show');

Route::get('/home/inquiry/{id}/edit', 'InquiryController@edit');

Route::post('/home/inquiry/update', 'InquiryController@update');

Route::post('/home/inquiry/status_change', 'InquiryController@statuschange');

Route::get('/home/status', 'InquiryController@statusindex');

Route::get('/json', 'AddDBController@json');

Route::get('/tel', 'AddDBController@getContractor');

