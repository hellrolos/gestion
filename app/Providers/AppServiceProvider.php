<?php

namespace gestion\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use GuzzleHttp\Client;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('GuzzleHttp\Client', function(){
            return new Client([
                'base_uri' => 'http://127.0.0.1:8080/wsgestioncurso/rest/',
                // 'base_uri' => 'https://jsonplaceholder.typicode.com',
                'timeout'  => 2.0,
                'exceptions' => false,
                'auth' => ['tecnm', 'tecnm'],
                'headers' => [
                    'Accept' => 'application/json',
                    'Content-Type' => 'application/json',
                ]
            ]);
        });
    }
}
