<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/produk', [App\Http\Controllers\ProdukController::class, 'index']);
Route::get('/produk/create', [App\Http\Controllers\ProdukController::class, 'create']);
Route::post('/produk', [App\Http\Controllers\ProdukController::class, 'store']);
Route::get('/produk/{id}/edit', [App\Http\Controllers\ProdukController::class, 'edit']);
Route::patch('/produk/{id}', [App\Http\Controllers\ProdukController::class, 'update']);
Route::delete('/produk/{id}', [App\Http\Controllers\ProdukController::class, 'destroy']);

Route::get('/pelanggan', [App\Http\Controllers\pelangganController::class, 'index']);
Route::get('/pelanggan/create', [App\Http\Controllers\pelangganController::class, 'create']);
Route::post('/pelanggan', [App\Http\Controllers\pelangganController::class, 'store']);
Route::get('/pelanggan/{id}/edit', [App\Http\Controllers\pelangganController::class, 'edit']);
Route::patch('/pelanggan/{id}', [App\Http\Controllers\pelangganController::class, 'update']);
Route::delete('/pelanggan/{id}', [App\Http\Controllers\pelangganController::class, 'destroy']);

Route::get('/users', [App\Http\Controllers\usersController::class, 'index']);
Route::get('/users/create', [App\Http\Controllers\usersController::class, 'create']);
Route::post('/users', [App\Http\Controllers\usersController::class, 'store']);
Route::get('/users/{id}/edit', [App\Http\Controllers\usersController::class, 'edit']);
Route::patch('/users/{id}', [App\Http\Controllers\usersController::class, 'update']);
Route::delete('/users/{id}', [App\Http\Controllers\usersController::class, 'destroy']);

Route::get('/transaksi', [App\Http\Controllers\TransaksiController::class, 'index']);
Route::get('/transaksi/create', [App\Http\Controllers\TransaksiController::class, 'create']);
Route::post('/transaksi', [App\Http\Controllers\TransaksiController::class, 'store']);
Route::get('/transaksi/{id}/edit', [App\Http\Controllers\TransaksiController::class, 'edit']);
Route::patch('/transaksi/{id}', [App\Http\Controllers\TransaksiController::class, 'update']);
Route::delete('/transaksi/{id}', [App\Http\Controllers\TransaksiController::class, 'destroy']);