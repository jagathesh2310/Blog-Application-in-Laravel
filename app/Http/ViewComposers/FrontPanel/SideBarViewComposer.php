<?php

namespace App\Http\ViewComposers\FrontPanel;

use App\Models\Article;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\View\View;

class SideBarViewComposer
{
    public function compose(View $view)
    {
        $categories=Category::all();
        $tags=Tag::all();
        $latestArticles=Article::latest()->take(6)->published()->get();
         $view->with(['categories'=>$categories,'tags'=>$tags,'latestArticles'=>$latestArticles]);
    }
}
