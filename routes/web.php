<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
<<<<<<< HEAD
use App\Models\Category;
=======
use App\Http\Controllers\UtilisateurController;
>>>>>>> 91a8c3b2251b056b72ccc4691e21ac6de8ddde50
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
Route::get('/articles/details', [ArticleController::class, 'details'])->name('articles.details');
Route::get('/category/details', [CategorieController::class, 'details'])->name('categorie.details');


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('categories', CategorieController::class);
    Route::resource('articles', ArticleController::class);
<<<<<<< HEAD
    // Route::get('/', [ArticleController::class, 'index'])->name('home');

=======
    
>>>>>>> 91a8c3b2251b056b72ccc4691e21ac6de8ddde50
});

require __DIR__ . '/auth.php';
