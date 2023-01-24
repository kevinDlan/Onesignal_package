<?php

namespace Kevin\Onesignal;

use Illuminate\Support\ServiceProvider;

class OnesignalServiceProvider extends ServiceProvider
{

    public function boot()
    {

    }

    public function register()
    {
        $this->app->config->set('onesiginal.api_key', env('APP_API_KEY'));
        $this->app->config->set('onesiginal.api_id', env('APP_ID'));
    }
}