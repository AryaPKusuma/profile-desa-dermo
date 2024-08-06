<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/tentang-dermo', function () {
    return view('about');
})->name('about');

Route::get('/umkmshow', function () {
    return view('umkmshow');
});

Route::get('/artikel', [App\Http\Controllers\ArticleController::class, 'index'])->name('articles');
Route::get('/artikel/{article:slug}', [App\Http\Controllers\ArticleController::class, 'show'])->name('articles.show');

Route::get('/umkm', [App\Http\Controllers\UmkmController::class, 'index'])->name('umkm');
Route::get('/umkm/{umkm:slug}', [App\Http\Controllers\UmkmController::class, 'show'])->name('umkm.show');
Route::get('/search-umkm', [App\Http\Controllers\UmkmController::class, 'search'])->name('search.umkm');
