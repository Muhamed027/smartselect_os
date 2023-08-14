<?php

namespace App\Providers;

use App\Models\Blog\Post;
use Illuminate\Support\ServiceProvider;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        view()->composer('components.blog.aside-posts', function ($view) {
            // $posts=Post::pluck('name','slug');
            $view->with('posts', Post::query()
                ->select('id', 'title', 'slug')
                ->orderBy('updated_at')
                ->simplePaginate(10));
        });
    }
}
