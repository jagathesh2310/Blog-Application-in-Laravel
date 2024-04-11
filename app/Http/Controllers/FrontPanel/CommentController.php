<?php

namespace App\Http\Controllers\FrontPanel;

use App\Http\Controllers\Controller;
use App\Models\Category;

class CommentController extends Controller
{
    public function index()
    {
        $categories = Category::paginate(4);
        return view('front-panel.categories', compact('categories'));
    }
}
