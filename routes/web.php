<?php

use App\Models\Article;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/blog', function () {
    $articles = Article::where('status', 'published')->get();

    return view('blog', compact('articles'));
})->name('blog');

Route::get('/blog/{article}', function (Article $article) {
    return view('article', compact('article'));
})->name('blog.article');
