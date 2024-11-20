<?php

namespace App\Http\Controllers;


use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\facades\Route;
use App\Http\Controllers\PostContrpller;
use App\Models\Article as ModelsArticle;
use App\Models\Category;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    
    public function index()
    {
        $articles = Article::with(['category', 'author', 'commentaires'])->latest()->paginate(10);
        return view('home', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.articles.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'titre' => "required|string",
            'introduction' => "required|string",
            'contenu' => "required|string",
            'image' => "required|image",
            'conclusion' => "required|string",
            // 'source' => "required|string",
            'category_id' => "required|numeric",
        ]);
        Article::create($request->all());
        return redirect()->route('articles.index')->with('success', 'Article ajoutée avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        return view('admin.articles.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        return view('admin.articles.edit', compact('article'));
    }
    public function details(Article $article)
    {
       return view("frontend.Article.show", compact("article"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        //
    }
}
