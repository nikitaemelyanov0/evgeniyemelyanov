<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Article;

class MainController extends Controller
{
    public function mainIndex() {
        $articles = Article::All()->take(4);
        return view('home', compact('articles'));
    }

}