<?php

namespace App\Providers;

use App\Http\Controllers\AdsRepositoriesInterface;
use App\Http\Controllers\ProductsRepositoriesInterface;
use App\Repositories\AdsRepositories;
use App\Repositories\ProductsRepositories;
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
        $this->app->bind(AdsRepositoriesInterface::class, AdsRepositories::class);
        $this->app->bind(ProductsRepositoriesInterface::class, ProductsRepositories::class);
    }
}
