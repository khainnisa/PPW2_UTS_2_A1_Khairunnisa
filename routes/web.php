<?php
use App\Http\Controllers\ProductController;

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
Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products/store', [ProductController::class, 'store'])->name('products.store');
// edit dan update
Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::put('/products/{id}', [ProductController::class, 'update'])->name('products.update');
// hapus
Route::delete('/products/{id}/hapus', [ProductController::class, 'destroy'])->name('products.destroy');
// cari buku
Route::get('/products/search', [ProductController::class, 'search'])->name('products.search');