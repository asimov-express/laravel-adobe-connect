<?php

namespace AsimovExpress\AdobeConnect;

use Illuminate\Support\ServiceProvider;
use App;
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
     * Perform post-registration booting of services.
     */
    public function boot() {
        $this->publishes([
            __DIR__ . '/../../config/adobe-connect.php' => config_path('adobe-connect.php'),
        ], 'config');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register() {
        $this->mergeConfigFrom(
            __DIR__.'/../../config/adobe-connect.php', 'adobe-connect'
        );

        $this->app->singleton('AsimovExpress\AdobeConnect\AdobeConnectClient', function ($app) {
            $host = config('adobe-connect.host');
            $username = config('adobe-connect.username');
            $password = config('adobe-connect.password');

            $adobeConfig = new Config($host, $username, $password);
            return new AdobeConnectClient($adobeConfig);
        });

        App::bind('adobe-connect', function(){
            return App::make('AsimovExpress\AdobeConnect\AdobeConnectClient');
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides(){
        return ['AsimovExpress\AdobeConnect\AdobeConnectClient'];
    }

}
