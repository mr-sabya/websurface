<?php

namespace App\Modules\Frontend;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;
use Termwind\Components\Li;

class FrontendServiceProvider extends ServiceProvider
{
    public function boot()
    {

        // Register routes
        $this->loadRoutesFrom(__DIR__ . '/Routes/web.php');

        // Register views
        $this->loadViewsFrom(__DIR__ . '/Views', 'Frontend');

        // Register migrations
        $this->loadMigrationsFrom(__DIR__ . '/Migrations');



        // Register Livewire components
        Livewire::component('frontend.example-component', \App\Modules\Frontend\Http\Livewire\ExampleComponent::class);
        Livewire::component('frontend.theme.header', \App\Modules\Frontend\Http\Livewire\Theme\Header::class);
        Livewire::component('frontend.theme.sidebar', \App\Modules\Frontend\Http\Livewire\Theme\Sidebar::class);
        Livewire::component('frontend.theme.footer', \App\Modules\Frontend\Http\Livewire\Theme\Footer::class);


        // Register the view namespace for the Frontend module
        $this->loadViewsFrom(app_path('Modules/Frontend/Views'), 'frontend');
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/Config/Frontend.php', 'Frontend');
    }
}
