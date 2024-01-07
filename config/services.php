<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
        'scheme' => 'https',
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'google' => [
        'client_id' => '1036995409207-k11ca3hlbpm93ct36q88pp3qkuabuomv.apps.googleusercontent.com',
        'client_secret' => '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',
        'redirect' => 'http://127.0.0.1:8000/auth/google/callback'
    ],

    'facebook' => [
        'client_id' => '274445408655724',
        'client_secret' => 'f3e573a1f631aac2798d06f158aaef85',
        'redirect' => 'http://127.0.0.1:8000/auth/facebook/callback'
    ],

];
