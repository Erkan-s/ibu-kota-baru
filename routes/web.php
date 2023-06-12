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

Route::get('/login', 'AuthController@loginForm')->name('login');
Route::post('/login', 'AuthController@login')->name('login.submit')->middleware('throttle:10,1');
Route::get('/', 'App\Http\Controllers\DashboardController@index');

Route::get('/pra-pemrosesan', 'App\Http\Controllers\DashboardController@beforePraPemrosesan');
Route::get('/pra-pemrosesan-proses', 'App\Http\Controllers\DashboardController@praPemrosesan');

Route::get('/penyesuaian-data', 'App\Http\Controllers\DashboardController@beforePenyesuaianData');
Route::get('/penyesuaian-data-proses', 'App\Http\Controllers\DashboardController@PenyesuaianData');

Route::get('/senti-word-net', 'App\Http\Controllers\DashboardController@beforeSentiWordNet');
Route::get('/senti-word-net-proses', 'App\Http\Controllers\DashboardController@sentiWordNet');

Route::get('/grafik-hasil', 'App\Http\Controllers\DashboardController@GrafikHasil');