<?php

namespace Teakowa\Cloudflare;

use Illuminate\Support\ServiceProvider;

class CloudflareServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/cloudflare.php' => config_path('cloudflare.php'),
        ], 'config');
    }

    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/cloudflare.php',
            'cloudflare'
        );

        $cloudflareConfig = config('cloudflare');

        $this->app->bind(Cloudflare::class, function () use ($cloudflareConfig) {
            return (new Cloudflare($cloudflareConfig['email'], $cloudflareConfig['key']));
        });
        
        $this->app->alias(Cloudflare::class, 'laravel-cloudflare');
    }

}
