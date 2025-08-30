<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function articlesIndex() {
        $articles = Article::all();
        return view('allArticles', compact('articles'));
    }

    public function articleIndex($id) {
        $article = Article::find($id);
        return view('article',compact('article'));
    }

    public function articleCreateIndex() {
        return view('createArticle');
    }

    public function articleCreatePost(Request $request) {
        $data =  $request->validate([
            'name' => 'required',
            'text' => 'required',
            'image' => 'required'
        ], [
            'image.required' => 'Выберите картинку',
        ]);
        $path = 'storage/'.$request->file('image')->store('images', 'public');
        $data['image'] = $path;
        $article = Article::create($data);
        return redirect('article/'.$article->id);
    }

    public function articleCreateEdit($id) {
        $article = Article::findOrFail($id);
        return view('createArticle', compact('article'));
    }
    
    public function articleCreateUpdate(Request $request, $id) {
        $article = Article::findOrFail($id);

        $data =  $request->validate([
            'name' => 'required',
            'text' => 'required',
            'image' => 'required'
        ], [
            'image.required' => 'Выберите картинку',
        ]);
        
        $path = 'storage/'.$request->file('image')->store('images', 'public');
        $data['image'] = $path;
        $article->update($data);
        return redirect('article/'.$article->id);
    }

    public function articleCreateDestroy($id)
    {
        $article = Article::findOrFail($id);
        $article->delete();
        return redirect('/articles');
    }
}