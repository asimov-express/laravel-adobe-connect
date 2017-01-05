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
        $this->app['config']->package(
            'asimov-express/laravel-adobe-connect',
            __DIR__ . '/../../config'
        );
        $this->app->singleton('AdobeConnect\AdobeConnectClient', function ($app) {
            $config = $app['config'];
            $host = $config->get('laravel-adobe-connect::config.host');
            $username = $config->get('laravel-adobe-connect::config.username');
            $password = $config->get('laravel-adobe-connect::config.password');

            $adobeConfig = new Config($host, $username, $password);
            return new AdobeConnectClient($adobeConfig);
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides(){
        return array('AdobeConnect\AdobeConnectClient');
    }

}
