<?php

namespace App\Providers;

use App\Models\User;
use App\Observers\UserObeserver;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
        //
    //  View::share('post', 'user-post');
        // Schema::defaultStringLength(191);

        // View::composer(['post','pass-data'], function ($view) {
        //     return $view->with('post','post-data');
        // });

        User::observe(UserObeserver::class);
    }
}
