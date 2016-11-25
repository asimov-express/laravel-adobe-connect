<?php

namespace AsimovExpress\AdobeConnect;

use Illuminate\Support\ServiceProvider;
use AdobeConnect\Config;
use AdobeConnect\ApiClient;

class AdobeConnectServiceProvider extends ServiceProvider {

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register() {
        $this->app->singleton('AdobeConnect\ApiClient', function ($app) {
            $config = $app['config'];
            $host = $config->get('laravel-adobe-connect::host');
            $username = $config->get('laravel-adobe-connect::username');
            $password = $config->get('laravel-adobe-connect::password');

            $config = new Config($host, $username, $password);
            return new ApiClient($config);
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides(){
        return array('AdobeConnect\ApiClient');
    }

}
