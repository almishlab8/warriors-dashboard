<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
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
        Schema::defaultStringLength(191);


        \Gate::define('isSuperAdmin', function($user){
            return $user->admin === '1';
           });
   
           \Gate::define('isTeacher', function($user){
            return $user->admin === '2';
           });

    }
}
