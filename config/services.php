<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => env('SES_REGION', 'us-east-1'),
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],



    'facebook' => [

        'client_id' => '1120224634748024', //Facebook API

        'client_secret' => '7303691d807eaff92bbb1657b96b1e', //Facebook Secret

        'redirect' => 'http://laravel.localhost/login/facebook/callback',

    ],
        'facebook' => [
        'client_id' => '251084432153030', //Facebook API
        'client_secret' => '3f18402a016d204ceb3772f3aa105530', //Facebook Secret
        'redirect' => 'http://blog.test/login/facebook/callback',
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

];
