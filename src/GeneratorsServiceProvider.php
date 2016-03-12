<?php

namespace Serbinario\L5scaffold;

use Illuminate\Support\ServiceProvider;

class GeneratorsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
       $this->commands(['Serbinario\L5scaffold\Console\Commands\CrudGeneratorCommand']);

        //
    }
}
