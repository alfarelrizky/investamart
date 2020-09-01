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

Route::get('/soal1','soal1Controller@index')->name('soal1.index');
route::get('/soal2','soal2Controller@index')->name('soal2.index');
route::get('/soal2/tambah','soal2Controller@indextambah')->name('soal2.indextambah');