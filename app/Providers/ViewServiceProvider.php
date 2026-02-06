<?php

namespace App\Providers;

use App\Models\Seo;
use App\Models\Logo;
use App\Models\Contact;
use App\Models\Product;
use App\Models\SocialMedia;
use App\Models\AboutCompany;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
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
        error_reporting(0);
        View::composer('layouts.partials.footer', function ($view) {

            $view->with([
                'logo'        => Logo::first(),
                'about'       => AboutCompany::first(),
                'contact'     => Contact::first(),
                'socials'     => SocialMedia::all(),
                'products'    => Product::limit(5)->get(), // optional
            ]);
        });

        View::composer('*', function ($view) {
            $page = Route::currentRouteName(); // misal: home, produk, about

            $seo = cache()->remember(
                'seo-' . $page,
                3600,
                fn() => Seo::where('page', $page)->first()
            );

            $view->with([
                'seo' => $seo,
                'logo' => Logo::first(),
                'contact' => Contact::first(),
            ]);
        });
    }
}
