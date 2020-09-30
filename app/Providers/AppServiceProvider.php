<?php

namespace App\Providers;

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
        app('view')->composer('layouts.main', function ($view) {
            $actionName = app('request')->route()->getAction();
    
            $controllerName = class_basename($actionName['controller']);
    
            list($controllerName, $actionName) = explode('@', $controllerName);
    
            $view->with(compact('controllerName', 'actionName'));
        });
    }
}
