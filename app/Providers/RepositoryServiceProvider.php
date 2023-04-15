<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->bind(\App\Repositories\Users\UserRepository::class, \App\Repositories\Users\UserRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\Users\UserPasswordRepository::class, \App\Repositories\Users\UserPasswordRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\Users\UserRoleRepository::class, \App\Repositories\Users\UserRoleRepositoryEloquent::class);
        //:end-bindings:
    }
}
