<?php

namespace StallNinja\Product;

use Illuminate\Support\ServiceProvider;

class ProductServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__.'../database/migrations');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'StallNinja\Product\Eloquent\Product',
            Eloquent\Product::class
        );
        $this->app->bind(
            'StallNinja\Product\Eloquent\Variant',
            Eloquent\Variant::class
        );
        $this->app->bind(
            'StallNinja\Product\Eloquent\Attribute',
            Eloquent\Attribute::class
        );
        $this->app->bind(
            'StallNinja\Product\Eloquent\Option',
            Eloquent\Option::class
        );
        $this->app->bind(
            'StallNinja\Product\Eloquent\OptionValue',
            Eloquent\OptionValue::class
        );
    }

    /**
     * Get the services provided.
     *
     * @return array
     */
    public function provides()
    {
        return [
            'StallNinja\Product\Eloquent\Product',
            'StallNinja\Product\Eloquent\Variant',
            'StallNinja\Product\Eloquent\Attribute',
            'StallNinja\Product\Eloquent\Option',
            'StallNinja\Product\Eloquent\OptionValue'
        ];
    }
}
