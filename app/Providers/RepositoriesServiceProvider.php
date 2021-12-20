<?php

namespace App\Providers;

use App\Http\Controllers\Admin\ProductsRepositoriesInterface;
use App\Http\Controllers\Admin\UserRepositoriesInterface;
use App\Http\Controllers\AdsRepositoriesInterface;
use App\Repositories\Admin\UserRepositories;
use App\Repositories\AdsRepositories;
use App\Repositories\Admin\ProductsRepositories;
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
        $this->app->bind(UserRepositoriesInterface::class, UserRepositories::class);
    }
}
