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

Route::get('/', 'FinanceController@index')->name('finance');
Route::post('/', 'FinanceController@financeUser')->name('finance.post');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/report/finance', 'HomeController@getPdf')->name('finance.report');
