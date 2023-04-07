<?php

/*
 * You can place your custom package configuration in here.
 */
return [
    'paths' => resource_path('views'),
    'mapbox' => [
        'access_token' => env('MAP_KEY', null),
    ],
    'google_maps' => [
        'access_token' => env('MAPS_GOOGLE_MAPS_ACCESS_TOKEN', null)
    ]
];
