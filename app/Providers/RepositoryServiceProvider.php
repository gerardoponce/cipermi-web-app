<?php

namespace App\Providers;

use App\Repositories\Eloquent\Base\CrudInterface;
use App\Repositories\Eloquent\Base\CrudInterfaceImpl;
use App\Repositories\Interfaces\ProductRepositoryIntf;
use App\Repositories\Interfaces\ServiceRepositoryIntf;
use App\Repositories\Eloquent\ProductRepositoryImpl;
use App\Repositories\Eloquent\ServiceRepositoryImpl;


use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(CrudInterface::class, CrudInterfaceImpl::class);
        $this->app->bind(ServiceRepositoryIntf::class, ServiceRepositoryImpl::class);
        $this->app->bind(ProductRepositoryIntf::class, ProductRepositoryImpl::class);
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
