<?php

return array(
    /*
    |--------------------------------------------------------------------------
    | Adobe Connect Hostname
    |--------------------------------------------------------------------------
    |
    | Adobe Connect provides you a subdomain in the form:
    |
    | <business>.adobeconnect.com
    |
    | Where <business> is the name of your business account, set here
    | the complete host name including '.adobeconnect.com'.
    |
    */

    'host' => env('ADOBE_CONNECT_HOST', ''),

    /*
    |--------------------------------------------------------------------------
    | Adobe Connect Username
    |--------------------------------------------------------------------------
    |
    | This must contain your Adobe Connect administrator's username.
    |
    | This seems to be a bad practice bud it is required by the Adobe
    | Connect API.
    |
    */

    'username' => env('ADOBE_CONNECT_USERNAME', ''),

    /*
    |--------------------------------------------------------------------------
    | Adobe Connect Password
    |--------------------------------------------------------------------------
    |
    | This must contain your Adobe Connect administrator's password.
    |
    | Remember to update this value in case the password changes for the
    | administrator's user.
    |
    */

    'password' => env('ADOBE_CONNECT_PASSWORD', ''),
);
 ?>
