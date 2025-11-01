<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;

// Route::get('/', function () {
//     return view('home');
// });


Route::get('/', [ProdukController::class, 'index'])->name('home');
Route::get('/', [PageController::class, 'home'])->name('home');

Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/produk/{id}', [PageController::class, 'detail'])->name('detail-produk');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');