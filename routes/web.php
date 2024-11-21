<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'welcome']);

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
    //Route::get('/articles/{article}', [ArticleController::class, 'details'])->name('articles.details');
    Route::resource('users', UserController::class);
    // Route::get('/', [ArticleController::class, 'index'])->name('home');

});

require __DIR__ . '/auth.php';
