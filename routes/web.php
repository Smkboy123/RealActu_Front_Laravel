<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CommentaireController;
use App\Http\Controllers\CategorieController;
use app\Http\Controllers\VisiteurController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('articles', ArticleController::class);
Route::resource('commentaire',CommentaireController::class);
Route::resource('categorie',CategorieController::class);
Route::resource('visiteur',CommentaireController::class);
