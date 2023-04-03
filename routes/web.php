<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\KategoriController;
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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', [IndexController::class, 'index']);

Route::get('/login',[AuthController::class, 'login']);

// Route::get('/{kategori}',[IndexController::class, 'kategori']);

Route::get('/tambah_kategori', function(){ return view('kategori.create');});

Route::post('/create', [KategoriController::class, 'store'])->name('store');
