<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\BlogController;
use App\Models\Kategori;
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
Route::get('/login', [AuthController::class, 'login']);
Route::get('/tambah_kategori',function(){
    return view('kategori.create');
});
Route::get('/tambah_blog',[BlogController::class, 'create']);
Route::get('/{kategori}', [IndexController::class, 'kategori'])->name('kategori_blog');

Route::post('/create', [KategoriController::class, 'store'])->name('store');


Route::post('/store', [BlogController::class, 'store'])->name('store_blog');
