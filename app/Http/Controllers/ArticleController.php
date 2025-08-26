<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    public function articlesIndex() {
        return view('allArticles');
    }

    public function articleIndex() {
        return view('article');
    }

}