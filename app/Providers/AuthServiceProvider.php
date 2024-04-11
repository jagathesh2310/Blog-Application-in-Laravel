<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use App\Models\Article;
use App\Models\Category;
use App\Models\Comment;
use App\Policies\ArticlePolicy;
use App\Policies\CategoriePolicy;
use App\Policies\CommentPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
        Article::class => ArticlePolicy::class,
        Category::class => CategoriePolicy::class,
        Comment::class => CommentPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        //
    }
}
