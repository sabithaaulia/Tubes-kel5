<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\mahasiswaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('login');
});

Route::get('/home', function () {
    return view('home');
});


Route::get('/products/menu', [ProdukController::class, 'menu']);

Route::get('/products/edit', function () {
    return view('edit');
});

Route::get('/debug-cart', function () {
    dd(session('cart'));
});

Route::get('/', function () {
    return view('welcome');
});

Route::resource('produk', ProdukController::class);
Route::delete('/produk/{produk}', [ProdukController::class, 'destroy']);
Route::post('/produk', [ProdukController::class, 'store'])->name('produk.store');
Route::post('/cart/add/{productId}', [CartController::class, 'addToCart']);
Route::delete('/cart/remove/{productId}', [CartController::class, 'removeFromCart']);
Route::put('/cart/update/{productId}', [CartController::class, 'updateCart']);
Route::get('/cart', [CartController::class, 'showCart']);
Route::delete('cart/remove/{productId}', [CartController::class, 'removeFromCart']);
Route::resource('mahasiswa', mahasiswaController::class);
