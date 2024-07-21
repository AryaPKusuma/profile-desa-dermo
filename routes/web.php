<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/artikel', [App\Http\Controllers\ArticleController::class, 'index'])->name('articles');
Route::get('/artikel/{article:slug}', [App\Http\Controllers\ArticleController::class, 'show'])->name('articles.show');
