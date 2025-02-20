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
Route::get('/tentang',[ProductController::class, 'tentang'])->name('home.tentang');
Route::get('/produk',[ProductController::class, 'produk'])->name('home.produk');
Route::get('/kontak',[ProductController::class, 'kontak'])->name('home.kontak');
Route::post('/admin', [ProductController::class, 'store'])->name('admin.products.store'); 


Route::get('/cart', [ProductController::class, 'keranjang'])->name('cart.keranjang');
Route::post('/cart/add/{product}', [ProductController::class, 'addToCart'])->name('cart.add');
Route::patch('/cart/update-quantity/{cartItem}', [ProductController::class, 'updateQuantity'])->name('cart.update-quantity');
Route::delete('/cart/remove-item/{cartItem}', [ProductController::class, 'removeItem'])->name('cart.remove-item');
Route::post('/cart/checkout', [ProductController::class, 'checkout'])->name('cart.checkout');