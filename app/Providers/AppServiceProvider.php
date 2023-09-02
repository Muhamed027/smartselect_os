<?php

namespace App\Providers;


use App\Models\Blog\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Blade;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\ServiceProvider;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Builder::macro('search', function ($field, string $string) {
        //     return $string ? $this->where($field, 'LIKE', '%' . $string . '%') : $this;
        // });
    }
}
