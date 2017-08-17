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
            config('stallninja.product.models.variant')
        );
        $this->app->bind(
            'StallNinja\Product\Eloquent\Attribute',
            config('stallninja.product.models.attribute')
        );
        $this->app->bind(
            'StallNinja\Product\Eloquent\Option',
            config('stallninja.product.models.option')
        );
        $this->app->bind(
            'StallNinja\Product\Eloquent\AttributeValue',
            config('stallninja.product.models.value.attribute')
        );
        $this->app->bind(
            'StallNinja\Product\Eloquent\OptionValue',
            config('stallninja.product.models.value.option')
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
            'StallNinja\Product\Eloquent\AttributeValue',
            'StallNinja\Product\Eloquent\OptionValue'
        ];
    }
}
