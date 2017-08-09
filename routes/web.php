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

Route::get('/', 'FibonacciController@getFibonacci');
Route::post('/nextFibonacci', 'FibonacciController@getFibonacci');
Route::post('/prevFibonacci', 'FibonacciController@getFibonacci');