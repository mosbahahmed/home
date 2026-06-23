<?php
/**
 * Application Configuration
 */

return [
    'name' => 'Nomad Traveler',
    'version' => '1.0.0',
    'environment' => getenv('APP_ENV') ?: 'production',
    'debug' => getenv('APP_DEBUG') ?: false,
    'url' => getenv('APP_URL') ?: 'https://nomadtraveler.com',
    'timezone' => 'UTC',
    'locale' => 'en_US',
    
    'features' => [
        'travel_map' => true,
        'travel_journal' => true,
        'social_network' => true,
        'deals_marketplace' => true,
        'membership' => true,
        'community' => true,
    ],
    
    'api' => [
        'rate_limit' => 100,
        'timeout' => 30,
    ],
];
