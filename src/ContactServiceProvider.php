<?php
namespace Tal7aouy\Contact;

use App\Providers\AppServiceProvider;

class ContactServiceProvider extends AppServiceProvider{

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__."/routes/web.php");
        $this->loadViewsFrom(__DIR__."/views","talk");
        $this->loadMigrationsFrom(__DIR__."/database/migrations");
        $this->mergeConfigFrom(__DIR__."/config/contact.php","talk");
        // publish your package
        $this->publishes([
            __DIR__."/config/contact.php" => config_path('contact.php')
        ]);
    }
    public function register()
    {

    }
}
