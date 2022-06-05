<?php

namespace App\Providers;

use App\Core\BuddyProvider;
use App\Core\Contracts\Buddy;
use Hyde\Framework\Hyde;
use Illuminate\Support\ServiceProvider;

class BuddyServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->app->singleton(Buddy::class, function ($app) {
            return new BuddyProvider();
        });
    }

    /**
     * Bootstrap services.
     *
     * @param \App\Core\Contracts\Buddy $buddy
     * @return void
     */
    public function boot(Buddy $buddy): void
    {
        // This sets the base path for the entire Hyde/Framework application,
        // allowing us to interact directly with the Hyde project.
        Hyde::setBasePath($buddy->project()->path);
    }
}
