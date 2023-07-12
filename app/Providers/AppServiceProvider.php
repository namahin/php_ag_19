<?php

namespace App\Providers;

use App\Models\SiteIdentity;
use Illuminate\Support\ServiceProvider;
use App\Models\SocialAccount;
use Illuminate\Support\Facades\View;

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
        View::composer('*', function ($view) {
            $socialLinks = SocialAccount::all();
            $siteIdentity = SiteIdentity::first();
            $view->with('socialLinks', $socialLinks);
            $view->with('siteIdentity', $siteIdentity);
        });
    }

}
