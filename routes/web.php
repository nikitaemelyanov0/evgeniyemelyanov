<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ArticleController;

Route::get('/', [MainController::class, 'mainIndex'])->name('main.index');
Route::get('/articles', [ArticleController::class, 'articlesIndex'])->name('articles.index');
Route::get('/article', [ArticleController::class, 'articleIndex'])->name('article.index');

