<?php

use App\Http\Controllers\FrontPanel\ArticleController;
use App\Http\Controllers\FrontPanel\CategoryController;
use App\Http\Controllers\FrontPanel\HomeController;
use App\Http\Controllers\FrontPanel\TagController;
use Illuminate\Support\Facades\Auth;
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
Auth::routes();
Route::group(['as' => 'front-panel.'], function () {
    Route::get('/', [HomeController::class, 'index'])->name('index');

    Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');
    Route::get('/articles/{article}', [ArticleController::class, 'show'])->name('article.show');

    Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');

    Route::get('/tags', [TagController::class, 'index'])->name('tags.index');
});
require_once 'back-panel.php';





