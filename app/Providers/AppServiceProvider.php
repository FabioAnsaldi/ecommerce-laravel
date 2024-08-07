<?php

namespace App\Providers;

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
        /**
         * Please have a look at this page, learn how to share global variables
         * https://websolutioncode.com/laravel-global-variable-for-all-views
         */

         view()->share('ECOMMERCE_VERSION', '1.0');
         view()->share('SITE_TITLE', 'Ecommerce');
         view()->share('ADMIN_EMAIL', 'admin@ecommerce.com');
    }
}
