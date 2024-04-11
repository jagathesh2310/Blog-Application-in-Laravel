<?php

namespace App\Providers;

use App\Http\ViewComposers\FrontPanel\SideBarViewComposer;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades;

class ViewServiceProvider extends ServiceProvider
{
    public function register(): void
    {

    }

    public function boot(): void
    {
        Facades\View::composer('layouts.front-panel.partials.sidebar', SideBarViewComposer::class);
    }
}
