<?php

namespace App\Providers;

use App\Http\Repositories\Impl\ProductImpl;
use App\Http\Repositories\ProductInterface;
use App\Http\Services\Impl\ProductServiceImpl;
use App\Http\Services\ProductService;
use Illuminate\Support\Facades\Schema;
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
        $this->app->singleton(
            ProductInterface::class,
            ProductImpl::class
        );
        $this->app->singleton(
        ProductService::class,
        ProductServiceImpl::class
    );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {Schema::defaultStringLength(191);
    }
}
