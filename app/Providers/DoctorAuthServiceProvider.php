<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class DoctorAuthServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        Auth::extend('doctorEloquent', function($app){
            // you can use Config::get() to retrieve the model class name from config file
            $myProvider = new EloquentUserProvider($app['hash'], '\App\Doctor') 
            return new Guard($myProvider, $app['session.store']);
        })
        $app->singleton('auth.driver_doctor', function ($app) {
            return Auth::driver('doctorEloquent');
        });
    }
}
