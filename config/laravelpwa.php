<?php

return [
    'name' => 'LaravelPWA',
    'manifest' => [
        'name' => env('APP_NAME', 'KalmKanine'),
        'short_name' => 'KK9',
        'start_url' => '/',
        'background_color' => '#4fd1c5',
        'theme_color' => '#4fd1c5',
        'display' => 'standalone',
        'orientation'=> 'portrait',
        'status_bar'=> '#4fd1c5',
        'icons' => [
            '72x72' => [
                'path' => '/images/icons/icon-72x72.png',
                'purpose' => 'any'
            ],
            '96x96' => [
                'path' => '/images/icons/icon-96x96.png',
                'purpose' => 'any'
            ],
            '128x128' => [
                'path' => '/images/icons/icon-128x128.png',
                'purpose' => 'any'
            ],
            '144x144' => [
                'path' => '/images/icons/icon-144x144.png',
                'purpose' => 'any'
            ],
            '152x152' => [
                'path' => '/images/icons/icon-152x152.png',
                'purpose' => 'any'
            ],
            '192x192' => [
                'path' => '/images/icons/icon-192x192.png',
                'purpose' => 'any'
            ],
            '384x384' => [
                'path' => '/images/icons/icon-384x384.png',
                'purpose' => 'any'
            ],
            '512x512' => [
                'path' => '/images/icons/icon-512x512.png',
                'purpose' => 'any'
            ],
        ],
        'splash' => [
            '640x1136' => '',
            '750x1334' => '',
            '828x1792' => '',
            '1125x2436' => '',
            '1242x2208' => '',
            '1242x2688' => '',
            '1536x2048' => '',
            '1668x2224' => '',
            '1668x2388' => '',
            '2048x2732' => '',
        ],
        'shortcuts' => [],
        'custom' => []
    ]
];
