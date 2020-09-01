<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/','InvestamartController@index')->name('investamart.index');
Route::get('/optimistic','InvestamartController@optimistic')->name('investamart.optimistic');
Route::get('/yolo','InvestamartController@yolo')->name('investamart.yolo');
Route::get('/quiz','InvestamartController@quiz')->name('investamart.quiz');
Route::get('/quiz/m/{id}','InvestamartController@quizm')->name('investamart.quizm');