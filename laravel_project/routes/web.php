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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home/pass_change', 'UserController@edit');

Route::get('/home/search', 'ContractorController@search');

Route::post('/home/test', 'ContractorController@test');

Route::get('/home/add_form', 'AddDBController@write');

Route::post('/home/add_form', 'AddDBController@submit');

Route::post('/home/add_form/add', 'AddDBController@add');

Route::get('/home/inquiry', 'InquiryController@index');

Route::get('/home/inquiry/{id}', 'InquiryController@show');
