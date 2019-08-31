<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::directive('nyi', function () {
            return "<span class='badge badge-danger' data-toggle='tooltip' data-placement='top' title='NOT YET IMPLEMENTED'><i class=\"fas fa-exclamation-circle\"></i> [NYI]</span>";
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
