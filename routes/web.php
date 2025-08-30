<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AdminController;

Route::get('/', [MainController::class, 'mainIndex'])->name('main.index');

Route::get('/articles', [ArticleController::class, 'articlesIndex'])->name('articles.index');
Route::get('/article/{id}', [ArticleController::class, 'articleIndex'])->name('article.index');

Route::get('/admin', [AdminController::class, 'adminIndex'])->name('login');
Route::post('/admin', [AdminController::class, 'adminPost'])->name('admin.post');

Route::middleware(['auth'])->group(function () {
    Route::get('/createarticle', [ArticleController::class, 'articleCreateIndex'])->name('articleCreate.index');
    Route::post('/createarticle', [ArticleController::class, 'articleCreatePost'])->name('articleCreate.post');

    Route::get('createarticle/{id}/edit', [ArticleController::class, 'articleCreateEdit'])->name('articleCreate.edit');
    Route::put('createarticle/{id}/edit', [ArticleController::class, 'articleCreateUpdate'])->name('articleCreate.update');

    Route::delete('createarticle/{id}/delete', [ArticleController::class, 'articleCreateDestroy'])->name('articleCreate.destroy');
});