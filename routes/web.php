<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DashboardController;
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
Route::get('/{kategori}', [IndexController::class, 'kategori'])->name('kategori_blog');
Route::get('/{slug}',[IndexController::class, 'view'])->name('slug_blog');
    
Route::get('/login', function(){
    return 'login';
});
Route::post('/postlogin',[AuthController::class, 'postlogin']);
Route::get('/logout',[AuthController::class, 'logout']);

Route::group(['middleware' => ['auth']], function() {

    Route::get('/dashboard',[DashboardController::class, 'index']);
    
    Route::get('/tambah_kategori',function(){
        return view('kategori.create');
    });
    Route::post('/store_kategori', [KategoriController::class, 'store'])->name('store_kategori');
    
    Route::get('/tambah_blog',[BlogController::class, 'create']);
    Route::post('/store', [BlogController::class, 'store'])->name('store_blog');

    
    
    
});
