<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\ServiceProvider;
use PDO;

class AppServiceProvider extends ServiceProvider
{
    
    public function register()
    {
        app()->bind('foor', function (){
            return 'bar';
        });
    }

    public function boot()
    {
        Model::unguard();
    }
}
