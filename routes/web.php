<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

Auth::routes();
Route::get('/', [ProductController::class, 'index'])->name('home.welcome');
Route::get('/tambah',[ProductController::class, 'create'])->name('admin.tambah');
Route::get('/tentang',[ProductController::class, 'produk'])->name('home.tentang');
Route::post('/admin', [ProductController::class, 'store'])->name('admin.products.store'); 