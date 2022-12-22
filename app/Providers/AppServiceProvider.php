<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Gate::define('mudir', function ($user) {
            return $user->role == 'mudir';
        });

        Gate::define('mudir-admin', function ($user) {
            return $user->role == 'mudir' || $user->role == 'admin';
        });

        Gate::define('admin', function ($user) {
            return $user->role == 'admin';
        });
    }
}
