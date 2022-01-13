<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ArtisanServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        \Event::listen('Illuminate\Console\Events\CommandFinished', function ($event) {
            if ($event->command == 'make:command' || $event->command == "make:controller") {
                \Log::channel('artisan')->info($event->input->__toString());
            }
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
