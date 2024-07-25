<?php

use App\Models\Article;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $projects = Project::orderBy('sort')->get();

    return view('index', compact('projects'));
})->name('home');

Route::get('/blog', function () {
    $articles = Article::where('status', 'published')->get();

    return view('blog', compact('articles'));
})->name('blog');

Route::get('/blog/{article}', function (Article $article) {
    $article->load('comments');

    return view('article', compact('article'));
})->name('blog.article');

Route::post('/comments/{article}', function (Article $article, Request $request) {
    $article->comments()->create($request->all(['author', 'content']));

    return redirect()->back();
})->name('comments.store');
