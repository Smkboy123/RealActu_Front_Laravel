<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashbord');
    }

    public function welcome()
    {
        $single_articles = Article::latest()->take(3)->count() >= 3 ? Article::latest()->take(3)->get() : Article::latest()->get();

        return view('welcome', compact('single_articles'));
    }

    
}
