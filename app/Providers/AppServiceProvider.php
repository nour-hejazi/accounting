<?php

namespace App\Providers;

use App\User;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */

    public function boot()
    {
        Schema::defaultStringLength(191);

//        PASSING THE MESSAGES DATA TO THE NAV VIEW
        view()->composer('admin.layouts.nav', function ($view){
            $view->with('messages', \App\Message::get());
        });

    }
}
