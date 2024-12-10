<?php

namespace App\Http\Controllers;


use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\facades\Route;
use App\Http\Controllers\PostContrpller;
use App\Models\Category;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    
    public function index()
    {
        $articles = Article::latest()->get();
        return view('Admin.articles.index', compact('articles'));
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
            // 'source' => "",
            'etiquette'=> "string",
            'category_id' => "required|numeric",
        ]);
        if($request->hasFile('image')){
            $image = $request->file('image')->store('articles');
            $article = new Article($request->all());
            $article->image = $image;
            $article->save();
            return redirect()->route('articles.index')->with('success', 'Article ajoutée avec succès');
        }
        return back()->with('error', 'erreur contenu');
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
        $categories = Category::all();
        return view('admin.articles.edit', compact('article','categories'));
    }
    public function details($id)
    {
        $article = Article::find($id);
        // dd($article);
       return view("frontend.Article.show", compact("article"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
         // dd($request->all());
         $request->validate([
            'titre' => "required|string",
            'introduction' => "required|string",
            'contenu' => "required|string",
            'image' => "required|image",
            'conclusion' => "required|string",
            // 'source' => "string",
            'etiquette'=> "string",
            'category_id' => "required|numeric",
        ]);
        // dd($request->all());
        // $article->
        $article->update($request->all());
        return redirect()->route('articles.index')->with('success', 'Article Modifiée avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        //
    }
    
}
