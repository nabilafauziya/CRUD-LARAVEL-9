<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\WaliController;


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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('siswa', SiswaController::class);
Route::resource('nilai', NilaiController::class);
Route::resource('jurusan', JurusanController::class);

Route::get('/test-admin',function(){
    return view('layouts.admin');
});

// route backend atau admin

Route::group(['prefix' => 'admin', 'middleware'=> ['auth']], function(){
    Route::get('/', function(){
        return view ('admin.index');
    });
    Route::resource('wali', WaliController::class);
});

