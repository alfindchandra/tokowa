<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;

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
Route::get('/', [ProductController::class, 'index'])->name('home');
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

Route::get('/login', [AdminController::class, 'login'])->name('login');
Route::post('/login', [AdminController::class, 'loginsave'])->name('login.save');
Route::post('/logout', [AdminController::class, 'logout'])->name('logout');


  // Product management
Route::prefix('admin')->middleware(['auth', 'admin'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/products', [AdminController::class, 'products'])->name('admin.products');
    Route::get('/categori', [AdminController::class, 'categori'])->name('admin.categori');
    Route::get('/products/create', [AdminController::class, 'create'])->name('admin.products.create');
    Route::get('/categori/create', [AdminController::class, 'createcat'])->name('admin.categori.create');
    Route::post('/products', [AdminController::class, 'store'])->name('admin.products.store');
    Route::post('/categori', [AdminController::class, 'storecat'])->name('admin.categori.store');
    Route::get('/products/{id}/edit', [AdminController::class, 'edit'])->name('admin.products.edit');
    Route::put('/products/{id}', [AdminController::class, 'update'])->name('admin.products.update');
    Route::delete('/products/{id}', [AdminController::class, 'destroy'])->name('admin.products.destroy');
    Route::delete('/categori/{id}', [AdminController::class, 'destroycat'])->name('admin.categori.destroy');
});