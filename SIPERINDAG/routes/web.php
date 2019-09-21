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

Route::get('/login', function () {
    return view('public.login');
});
Route::get('/registrasi', function () {
    return view('public.register');
});

Route::post('/send/registration','RegisterController@create');

Route::post('/postlogin','LoginController@logon');

Route::get('/logout','LoginController@logout');



//===||login SEMUA||===// 

Route::group(['middleware' => ['auth','checkRole:wirausahawan,disper,admin']], function(){

Route::get('/index', function () {
    return view('welcome');
});

});

//===||login wirausaha||===// 

Route::group(['middleware' => ['auth','checkRole:wirausahawan']], function(){



});

//===||login admin||===// 

Route::group(['middleware' => ['auth','checkRole:admin']], function(){

Route::get('/buat-akun-disper','DisperController@index');

Route::post('/send/register-disper','DisperController@create');
});
