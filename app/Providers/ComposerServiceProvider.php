<?php
namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;

class ComposerServiceProvider extends ServiceProvider{

    /*BOOT FUNCTION*/
    public function boot()
    {

    }

    /*REGISTER FUNCTION*/
    public function register()
    {
        // TODO: Implement register() method.
        View::composer(['Client::layouts.header', 'Client::layouts.product', 'Client::layouts.footer'],'App\ViewComposers\ProgramComposer');
        View::composer(['Client::layouts.banner-donkey'],'App\ViewComposers\MobileDetectComposer');
    }

}