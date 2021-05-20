<?php
return [
    'default' => 'mongodb',
    'connections' => [
        'mongodb' => [ 
            'driver' => 'mongodb',
            'dsn' => env('DB_DSN'),
            'database' => env('DB_DATABASE'),
            'options' => [
                'database' => 'admin' // sets the authentication database required by mongo 3
            ]
        ],
    ],
    'migrations' => 'migrations',
];
