<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Article;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminIndex() {
        return view('admin');
    }

    public function adminPost(Request $request) {
        $data = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        if(Auth::attempt($data)){
            $request->session()->regenerate();
            return redirect('/');
        }
        return back()->with('error', 'Неверно набран email или пароль');
    }

}