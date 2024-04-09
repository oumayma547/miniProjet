<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Cat;
use Illuminate\Contracts\View\Factory;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {


        // Utilisation de view()->composer()
       /* view()->composer('front.inc.header', function ($view) {
            $view->with('cats', Cat::select('id', 'name')->get());
        });*/
    }


    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
