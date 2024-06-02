<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        // dd( \App\Repositories\SanctumAuthRepository::class,
        // \App\Repositories\Interface\AuthInterface::class);
        $this->app->bind(\App\Repositories\Interfaces\AuthInterface::class, \App\Repositories\SanctumAuthRepository::class);

    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
