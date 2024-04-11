<?php

namespace App\Http\Controllers\FrontPanel;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use App\Models\Tag;
use Auth;

class HomeController extends Controller
{
    public function index()
    {
        $latest_articles = Article::latest()->take(6)->published()->get();
        $popular_articles = Article::latest()->take(6)->published()->get();
        return view("front-panel.index", compact('latest_articles', 'popular_articles'));
    }
    public function categories()
    {

    }

    public function tags()
    {

    }

}
