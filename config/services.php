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
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],
    'twilio' => [
        'sid' => env('TWILIO_SID'),
        'token' => env('TWILIO_TOKEN'),
        'from' => env('TWILIO_FROM'),
        'ssl_verify' => true, // Development switch to bypass API SSL certificate verfication
    ],

    'github' => [
        'client_id' => env('Git_Client_Id'),
        'client_secret' => env('Git_Client_Secret'),
        'redirect' => env('Git_Redirect'),
    ],
    'facebook' => [
        'client_id'     => env('FB_Client_Id'),
        'client_secret' => env('FB_Client_Secret'),
        'redirect'      => env('FB_Redirect'),
    ],
    'twitter' => [
        'client_id'     => env('twitter_Client_Id'),
        'client_secret' => env('twitter_Client_Secret'),
        'redirect'      => env('twitter_Redirect'),
    ],
    'google' => [
        'client_id'     => env('Google_Client_Id'),
        'client_secret' =>  env('Google_Client_Secret'),
        'redirect'      => env('Google_Redirect'),
    ],
    'http' => [
        'server_key' => env('FCM_SERVER_KEY', 'Your FCM server key'),
        'sender_id' => env('FCM_SENDER_ID', 'Your sender id'),
        'server_send_url' => 'https://fcm.googleapis.com/fcm/send',
        'server_group_url' => 'https://android.googleapis.com/gcm/notification',
        'timeout' => 30.0, // in second
    ],



];
