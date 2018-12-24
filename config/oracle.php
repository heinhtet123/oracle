<?php

// return [
//     'oracle' => [
//         'driver'         => 'oracle',
//         'tns'            => env('DB_TNS', ''),
//         'host'           => env('DB_HOST', ''),
//         'port'           => env('DB_PORT', '1521'),
//         'database'       => env('DB_DATABASE', ''),
//         'username'       => env('DB_USERNAME', ''),
//         'password'       => env('DB_PASSWORD', ''),
//         'charset'        => env('DB_CHARSET', 'AL32UTF8'),
//         'SID'            => env('DB_SID',''),
//         'prefix'         => env('DB_PREFIX', ''),
//         'prefix_schema'  => env('DB_SCHEMA_PREFIX', ''),
//         'edition'        => env('DB_EDITION', 'ora$base'),
//         'server_version' => env('DB_SERVER_VERSION', '11g'),
//     ],
// ];



return [
    'oracle' => [
        'driver'         => 'oracle',
        // 'tns'            => env('DB_TNS', ''),
        'host'           => env('DB_HOST', 'dr01-scan.kbzbank.com.mm'),
        'port'           => env('DB_PORT', '1580'),
        'database'       => env('DB_DATABASE', ''),
        'username'       => env('DB_USERNAME', 'KBZAPICFGDEV'),
        'password'       => env('DB_PASSWORD', 'k8zapi'),
        'charset'        => env('DB_CHARSET', 'AL32UTF8'),
        'service_name'   => env('DB_SERVICENAME','fcubsuat.kbzbank.com.mm'),
        'prefix'         => env('DB_PREFIX', ''),
        'prefix_schema'  => env('DB_SCHEMA_PREFIX', ''),
        'server_version' => env('DB_SERVER_VERSION', '11g'),
    ],
];


