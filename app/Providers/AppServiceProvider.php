<?php

namespace App\Providers;

use App\Models\Category;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\View;
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
        Paginator::useBootstrap();

        // On shared hosting the app is served from a subfolder through the root
        // .htaccess -> root index.php front controller, so Laravel auto-detects
        // the correct base URL from each request (no "/public/" in links).
        // Only force HTTPS when the host runs behind SSL (set FORCE_HTTPS=true
        // in production); local http is left untouched.
        if (env('FORCE_HTTPS', false)) {
            URL::forceScheme('https');
        }

        // Categories for the "Products" dropdown in the site navigation
        View::composer('layouts.app', function ($view) {
            try {
                $navCategories = Category::where('is_active', true)
                    ->orderBy('sort_order')->orderBy('name')
                    ->get(['id', 'name', 'slug']);
            } catch (\Throwable $e) {
                $navCategories = collect(); // database not migrated yet
            }

            $view->with('navCategories', $navCategories);
        });
    }
}
