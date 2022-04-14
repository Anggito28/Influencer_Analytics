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

Route::get('/', function () {
    return view('main');
});
Route::get('detailAkun', function () {
    return view('akunDetail');
});
Route::get('template', function () {
    return view('template');
});
Route::get('listuser', function () {
    return view('listuser');
});
Route::get('kategori', function () {
    return view('kategori');
});
Route::get('kategori-gaming', function () {
    return view('gaming');
});
Route::get('detail', function () {
    return view('detailAkun');
});