<?php

namespace App\Providers;

use Illuminate\Support\Facades\URL;
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
        // SEO: ensure every generated URL (canonical tags, og:url, the spatie
        // sitemap, and internal route()/url() links) uses the final canonical
        // host instead of the www host that 301-redirects. Driven by APP_URL.
        if (app()->environment('production')) {
            URL::forceScheme('https');
            URL::forceRootUrl(config('app.url'));
        }

        // Theme license activation flag.
        // (Previously obfuscated as eval(base64_decode(...)); de-obfuscated here
        // for transparency — behavior is identical: read storage/laravel.txt and
        // set config('app.active'). The HandleInertiaRequests middleware aborts
        // with HTTP 403 "License not activate" when app.active is false.)
        $licenseFile = storage_path('laravel.txt');
        if (file_exists($licenseFile)) {
            config()->set('app.active', base64_decode(file_get_contents($licenseFile)) === 'active');
        }
    }
}
