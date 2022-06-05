<?php

namespace App\Providers;

use App\Core\BuddyProvider;
use App\Core\Contracts\Buddy;
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
