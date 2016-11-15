## About
This package simplifies the integration of your Laravel 4.2 application with Adobe Connect.

## Installation

Include the package in your project with composer.

```
composer require asimov-express/laravel-adobe-connect
```

Then register the service provider in your config/app.php file.

``` php
'providers' => array(
    .
    .
    .

    'AsimovExpress\AdobeConnect\AdobeConnectServiceProvider'


);
```

## Configuration

You must configure your Adobe Connect account information, for this you first need to publish the configuration file.

```
php artisan config:publish asimov-express/laravel-adobe-connect
```

You can find the configuration file in the vendors directory inside your app/config folder assuming all the default configuration the configuration file should be in the folder `app/config/packages/asimov-express/laravel-adobe-connect`

Instead of hardcoding your Adobe Connect account information on this file you should place it in your `.env` file with the following entries.

### ADOBE_CONNECT_HOST: Adobe Connect Hostname
Adobe Connect provides you a subdomain in the form:

```
<business>.adobeconnect.com
```

Where <business> is the name of your business account, set here the complete host name including '.adobeconnect.com'.

### ADOBE_CONNECT_USERNAME: Adobe Connect Username
This must contain your Adobe Connect administrator's username.

This seems to be a bad practice bud it is required by the Adobe Connect API.

### ADOBE_CONNECT_PASSWORD: Adobe Connect Password
This must contain your Adobe Connect administrator's password.

Remember to update this value in case the password changes for the administrator's user.
