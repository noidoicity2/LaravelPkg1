<?php
namespace mr\pkg1;

use Illuminate\Support\ServiceProvider;

class ContactFormServiceProvider extends ServiceProvider {
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'hello');

        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/hello'),
        ]);


    }
    public function register()
    {

    }
}
