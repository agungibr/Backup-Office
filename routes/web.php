<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KasController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\LaptopController;
use App\Http\Controllers\ProfileController;

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

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
	Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

	Route::get('/indexkas', [KasController::class, 'indexkas'])->name('kas.index');
    Route::get('/createkas', [KasController::class, 'createkas'])->name('kas.create');
    Route::post('/storekas', [KasController::class, 'storekas'])->name('kas.store');
    Route::get('/showkas/{id}', [KasController::class, 'showkas'])->name('kas.show');
    Route::post('/updatekas/{id}', [KasController::class, 'updatekas'])->name('kas.update');
    Route::get('/destroykas/{id}', [KasController::class, 'destroykas'])->name('kas.destroy');

	Route::get('/indexkaryawan', [KaryawanController::class, 'indexkaryawan'])->name('karyawan.index');
    Route::get('/createkaryawan', [KaryawanController::class, 'createkaryawan'])->name('karyawan.create');
    Route::post('/storekaryawan', [KaryawanController::class, 'storekaryawan'])->name('karyawan.store');
    Route::get('/showkaryawan/{id}', [KaryawanController::class, 'showkaryawan'])->name('karyawan.show');
    Route::post('/updatekaryawan/{id}', [KaryawanController::class, 'updatekaryawan'])->name('karyawan.update');
    Route::get('/destroykaryawan/{id}', [KaryawanController::class, 'destroykaryawan'])->name('karyawan.destroy');

    Route::get('/indexlaptop', [LaptopController::class, 'indexlaptop'])->name('laptop.index');
    Route::get('/createlaptop', [LaptopController::class, 'createlaptop'])->name('laptop.create');
    Route::post('/storelaptop', [LaptopController::class, 'storelaptop'])->name('laptop.store');
    Route::get('/showlaptop/{id}', [LaptopController::class, 'showlaptop'])->name('laptop.show');
    Route::post('/updatelaptop/{id}', [LaptopController::class, 'updatelaptop'])->name('laptop.update');
    Route::get('/destroylaptop/{id}', [LaptopController::class, 'destroylaptop'])->name('laptop.destroy');


	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
});

