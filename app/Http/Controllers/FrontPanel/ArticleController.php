<?php

namespace App\Http\Controllers\FrontPanel;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Auth;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::latest()->published()->paginate(10);
        return view("front-panel.articles", compact('articles'));
    }
    public function show(Article $article){
        if (!Auth::user()->hasViewedArticle($article)) {
            Auth::user()->viewedArticles()->attach($article,['like'=>false]);
        }
        $article->load(['comments','tags','category','user']);
        return view('front-panel.article',compact('article'));
    }
}
