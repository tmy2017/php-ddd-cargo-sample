<?php

return [
    'debug' => true,

    'config_cache_enabled' => false,

    'doctrine' => [
        'connection' => [
            'orm_default' => [
                'driverClass' => 'Doctrine\DBAL\Driver\PDOMySql\Driver',
                // MUST do migration command INSIDE container since db host is now base on docker-compose.yml
                'host' => '127.0.0.1',
                // if for host machine to execute migration, must NOT use localhost! 
                //  Ref: https://stackoverflow.com/a/22927341/4127966
                //'host' => '127.0.0.1',
                // due to inside container so really still in 3306 - sigh.. quite cognitive overload!
                'port' => '3306',
                // info from docker-compose.yml
                'user' => 'root',
                'password' => '',
                'dbname' => 'cargo_sample',
                'charset' => 'utf8',
                'driverOptions' => [
                    1002 => "SET NAMES 'UTF8'"
                ],
            ]
        ],
    ],

    'whoops' => [
        'json_exceptions' => [
            'display'    => true,
            'show_trace' => true,
            'ajax_only'  => true,
        ],
    ],
];
