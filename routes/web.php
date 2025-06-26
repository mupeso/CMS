<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ShowArticlesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/admin', [AdminController::class,"index"])->name("index");

});

// Route::middleware(['auth', 'isAdmin'])->group(function () {
//     Route::get('/admin', function () {
//     return view('admin');
// })->name("admin");





Route::get('/welcome', function () {
    return view('welcome');
});




Route::get('/', function () {
    return view('index');
})->name("home");

Route::get('/about', function () {
    return view('about');
})->name("about");

Route::get('/edit', function () {
    return view('Articles.edit');
})->name("edit");






Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');




Route::middleware('auth')->group(function () {
    Route::get('/ShowArticles',[ShowArticlesController::class,"create"])->name("article.Show");
    Route::get('/post',[ArticleController::class,"create"])->name("post");
    Route::post('/post/store',[ArticleController::class,"store"])->name("article.store");
    Route::delete('/post/delete/{id}',[ArticleController::class,"destroy"])->name("article.destroy");





Route::get('/contact', function () {
    return view('contact');
})->name("contact");

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
