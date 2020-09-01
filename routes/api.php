<?php
use Illuminate\Support\Facades\Route;

route::namespace('Auth')->group(function(){
    Route::post('register','RegisterController');
    Route::post('login','SignInController');
    Route::post('logout','LogoutController');
});

route::namespace('mengingatAPI')->prefix('mengingatAPI')->group(function(){
    route::post('/register','RegisterController');
});

route::get('user','UserController');