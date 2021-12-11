<?php

namespace App\Providers;

use App\Http\Controllers\RepositoriesInterface;
use App\Repositories\AdsRepositories;
use Illuminate\Support\ServiceProvider;

class RepositoriesServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(RepositoriesInterface::class,AdsRepositories::class);
    }
}
