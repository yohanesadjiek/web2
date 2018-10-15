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
    return view('index');
});

Route::get('/halaman1', function () {
    return view('halaman1');
});

Route::get('/halaman 2', function () {
    return view('halaman2');
});

Route::get('adjie/tambah','web@tambah');
Route::resource('adjie','web');
