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
        // Récupère les 3 derniers articles pour le slider (ou moins si pas assez d'articles)
        $single_articles = Article::latest()->take(3)->count() >= 3 ? Article::latest()->take(3)->get() : Article::latest()->get();
        $random_categories = Category::latest()->take(2)->count() >= 2 ? Category::latest()->take(2)->get() :  Category::latest()->get();

        // Récupère toutes les catégories avec leurs articles associés
        $categories = Category::with('articles')->get();

        // Retourne la vue avec les articles et les catégories
        return view('welcome', compact('single_articles', 'categories'));
    }
}




