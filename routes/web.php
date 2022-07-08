<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenyewaController;
use App\Http\Controllers\LoginController;

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


Route::get('/beranda', function () { return view('beranda');})->name('beranda');

//Route::get('/data-penyewa','App\Http\Controllers\PenyewaController@index')->name('data-penyewa');
//Route::get('/create-penyewa','App\Http\Controllers\PenyewaController@create')->name('create-penyewa');
//Route::get('/home-penyewa','App\Http\Controllers\PenyewaController@index', function () {
//    return view('home-penyewa');
//});
Route::post('/simpan-penyewa','App\Http\Controllers\PenyewaController@store')->name('simpan-penyewa');
Route::get('/edit-penyewa/{id}','App\Http\Controllers\PenyewaController@edit')->name('edit-penyewa');
Route::post('/update-penyewa/{id}','App\Http\Controllers\PenyewaController@update')->name('update-penyewa');
Route::get('/delete-penyewa/{id}','App\Http\Controllers\PenyewaController@destroy')->name('delete-penyewa');

Route::get('/registrasi',[LoginController::class, 'registrasi'])->name('registrasi');
Route::post('/simpanregistrasi',[LoginController::class, 'simpanregistrasi'])->name('simpanregistrasi');
Route::get('/login',[LoginController::class, 'halamanlogin'])->name('login');
Route::post('/postlogin',[LoginController::class, 'postlogin'])->name('postlogin');
Route::get('/logout',[LoginController::class, 'logout'])->name('logout');

Route::group(['middleware' => ['auth','ceklevel:admin,Penyewa']], function () {
    Route::get('/data-penyewa','App\Http\Controllers\PenyewaController@index', function () {
        return view('data-penyewa');
    });
    Route::get('/create-penyewa','App\Http\Controllers\PenyewaController@create')->name('create-penyewa');
});

/*Route::group(['middleware' => ['auth','ceklevel:Penyewa']], function () {
    Route::get('/data-penyewa','App\Http\Controllers\PenyewaController@index', function () {
        return view('data-penyewa');
    });
    Route::get('/create-penyewa','App\Http\Controllers\PenyewaController@create')->name('create-penyewa');
});*/