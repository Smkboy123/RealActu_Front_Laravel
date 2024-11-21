<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
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
        $random_categories = Category::latest()->take(2)->count() >= 2 ? Category::latest()->take(2)->get() :  Category::latest()->get();

        return view('welcome', compact('single_articles', 'random_categories'));
    }

    
}
