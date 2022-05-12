<?php

namespace App\Providers;

use App\Core\Buddy;
use App\Core\BuddyProvider;
use Illuminate\Support\ServiceProvider;

class BuddyServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Buddy::class, function ($app) {
            return new BuddyProvider();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
       //
    }
}
