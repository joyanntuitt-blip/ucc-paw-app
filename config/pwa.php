<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Would you like the install button to appear on all pages?
      Set true/false
    |--------------------------------------------------------------------------
    */

    'install-button' => true, // Automatically provides the "Add to Home Screen" banner layout flows

    /*
    |--------------------------------------------------------------------------
    | PWA Manifest Configuration
    |--------------------------------------------------------------------------
    |  php artisan erag:update-manifest
    */

    'manifest' => [
        'name' => 'University of the Commonwealth App',
        'short_name' => 'UCC App',
        'background_color' => '#ffffff',
        'theme_color' => '#1E3A8A', // Official UCC Branding Blue color
        'display' => 'standalone', // Removes the web browser address bar to look like a native application shell
        'description' => 'Access UCC IT Department resource pathways natively.',
        'icons' => [
            [ ],
        ], 
    ], 

    /*
    |--------------------------------------------------------------------------
    | Debug Configuration
    |--------------------------------------------------------------------------
    | Toggles the application's debug mode based on the environment variable
    */

    'debug' => env('APP_DEBUG', false),

    /*
    |--------------------------------------------------------------------------
    | Livewire Integration
    |--------------------------------------------------------------------------
    | Set to true if you're using Livewire in your application to enable
    | Livewire-specific PWA optimizations or features.
    */

    'livewire-app' => false,
];
