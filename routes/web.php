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
    return view('welcome');
});
Route::get('beranda', function () {
    return view('beranda');
});
Route::get('menu', function () {
    return view('menu');
});
Route::get('promo', function () {
    return view('promo');
});
Route::get('profil', function () {
    return view('profil');
});
Route::get('layanan', function () {
    return view('layanan');
});
Route::get('KM', function () {
    return view('KM');
});
Route::get('DKP', function () {
    return view('DKP');
});
Route::get('TKP', function () {
    return view('TKP');
});
Route::get('Drink', function () {
    return view('Drink');
});