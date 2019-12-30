<?php

return [

    //-------------------------------
    // Timezone for insert dates in database
    // If you want Gateway not set timezone, just leave it empty
    //--------------------------------
    'timezone' => 'Asia/Tehran',

    //--------------------------------
    // Zarinpal gateway
    //--------------------------------
    'zarinpal' => [
      'merchant-id'  => env('MERCHANT_ID', 'xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx'),
      'type'         => env('TYPE', 'zarin-gate'),             // Types: [zarin-gate || normal]
      'callback-url' => env('CALLBACK_URL', '/'),
      'server'       => env('SERVER', 'germany'),                // Servers: [germany || iran || test]
      'email'        => env('EMAIL', 'email@gmail.com'),
      'mobile'       => env('MOBILE', '09xxxxxxxxx'),
      'description'  => env('DESCRIPTION', 'description'),
    ],

    //--------------------------------
    // Mellat gateway
    //--------------------------------
    'mellat' => [
        'username'     => env('USERNAME', ''),
        'password'     => env('PASSWORD', ''),
        'terminalId'   => env('TERMINAL_ID', '0000000'),
        'callback-url' => env('CALLBACK_URL', '/'),
    ],

    //--------------------------------
    // Saman gateway
    //--------------------------------
    'saman' => [
        'merchant'     => env('MERCHANT', ''),
        'password'     => env('PASSWORD', ''),
        'callback-url'   => env('CALLBACK_URL', '/'),
    ],

    //--------------------------------
    // PayIr gateway
    //--------------------------------
    'payir'    => [
        'api'          => env('API_PAYIR', 'xxxxxxxxxxxxxxxxxxxx'),
        'callback-url' => env('CALLBACK_URL', '/'),
    ],

    //--------------------------------
    // IranKish gateway
    //--------------------------------
    'irankish' => [
        'merchantId'  => env('MERCHANT_ID', 'xxxxxxxxxxxxxxxxxxxx'),
        'sha1key' => env('SHA1KEY', 'xxxxxxxxxxxxxxxxxxxx'),
        'callback-url'   => env('CALLBACK_URL', '/'),
    ],

    //--------------------------------
    // Sadad gateway
    //--------------------------------
    'sadad' => [
        'merchant'      => env('MERCHANT', ''),
        'transactionKey'=> env('TRANSACTIONKEY', ''),
        'terminalId'    => env('TERMINAL_ID', '000000000'),
        'callback-url'   => env('CALLBACK_URL', '/'),
    ],

    //--------------------------------
    // Parsian gateway
    //--------------------------------
    'parsian' => [
        'pin'          => env('PIN_PARSIAN', 'xxxxxxxxxxxxxxxxxxxx'),
        'callback-url'   => env('CALLBACK_URL', '/'),
    ],
    //--------------------------------
    // Pasargad gateway
    //--------------------------------
    'pasargad' => [
        'terminalId'    => env('TERMINAL_ID', '000000000'),
        'merchantId'    => env('MERCHANT_ID', '000000'),
        'certificate-path'    => storage_path('gateway/pasargad/certificate.xml'),
        'callback-url' => '/gateway/callback/pasargad'
    ],

    //--------------------------------
    // Asan Pardakht gateway
    //--------------------------------
    'asanpardakht' => [
        'merchantId'     => env('MERCHANT_ID', ''),
        'merchantConfigId'     => env('MERCHANT_CONFIG_ID', ''),
        'username' => env('USERNAME', ''),
        'password' => env('PASSWORD', ''),
        'key' => env('KEY', ''),
        'iv' => env('IV', ''),
        'callback-url'   => env('CALLBACK_URL', '/'),
    ],

    //--------------------------------
    // Paypal gateway
    //--------------------------------
    'paypal'   => [
        // Default product name that appear on paypal payment items
        'default_product_name' => env('DEFAULT_PRODUCT_NAME', 'My Product'),
        'default_shipment_price' => env('DEFAULT_SHIPMENT_PRICE', ''),
        // set your paypal credential
        'client_id' => env('CLIENT_ID', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx-xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx'),
        'secret'    => env('SECRET', 'xxxxxxxxxx_xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx'),
        'settings'  => [
            'mode'                   => 'sandbox', //'sandbox' or 'live'
            'http.ConnectionTimeOut' => 30,
            'log.LogEnabled'         => true,
            'log.FileName'           => storage_path() . '/logs/paypal.log',
            /**
             * Available option 'FINE', 'INFO', 'WARN' or 'ERROR'
             *
             * Logging is most verbose in the 'FINE' level and decreases as you
             * proceed towards ERROR
             */
            'call_back_url'          => '/gateway/callback/paypal',
            'log.LogLevel'           => 'FINE'

        ]
    ],
    //-------------------------------
    // Tables names
    //--------------------------------
    'table'    => 'gateway_transactions',
];
