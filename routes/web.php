<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/products/{products}/pdf', [ProductController::class, 'generarReporte'])->name('report.pdf');
Route::get('/create', [ProductController::class, 'create'])->name('create');
Route::post('/store', [ProductController::class, 'store'])->name('store');
Route::get('/index', [ProductController::class, 'index'])->name('index');
Route::get('/show/{id}', [ProductController::class, 'show'])->name('show');
Route::delete('/delete/{id}', [ProductController::class, 'delete'])->name('delete');
Route::put('/update/{id}', [ProductController::class, 'update'])->name('update');
Route::get('/products/{id}/pdf', [ProductController::class, 'generatePdf'])->name('product.pdf');


