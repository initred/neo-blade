<?php

use Initred\NeoBlade\Components;

return [

    /*
    |--------------------------------------------------------------------------
    | Components
    |--------------------------------------------------------------------------
    |
    | Below you reference all components that should be loaded for your app.
    | By default all components from NeoBlade are loaded in. You can
    | disable or overwrite any component class or alias that you want.
    |
    */

    'components' => [
        'input' => [
            'text' => Components\Input\Text::class,
            'help' => Components\Input\Help::class,
            'label' => Components\Input\Label::class,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Components Prefix
    |--------------------------------------------------------------------------
    |
    | This value will set a prefix for all NeoBlade Kit components.
    | By default it's empty. This is useful if you want to avoid
    | collision with components from other libraries.
    |
    | If set with "buk", for example, you can reference components like:
    |
    | <x-buk-easy-mde />
    |
    */

    'prefix' => '',

    /*
    |--------------------------------------------------------------------------
    | Third Party Asset Libraries
    |--------------------------------------------------------------------------
    |
    | These settings hold reference to all third party libraries and their
    | asset files served through a CDN. Individual components can require
    | these asset files through their static `$assets` property.
    |
    */

    'assets' => [

        /*
        'alpine' => 'https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.3.5/dist/alpine.min.js',

        'easy-mde' => [
            'https://unpkg.com/easymde/dist/easymde.min.css',
            'https://unpkg.com/easymde/dist/easymde.min.js',
        ],

        'flat-pickr' => [
            'https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css',
            'https://cdn.jsdelivr.net/npm/flatpickr@4.6.9/dist/flatpickr.min.js',
        ],

        'mapbox' => [
            'https://api.mapbox.com/mapbox-gl-js/v1.8.1/mapbox-gl.css',
            'https://api.mapbox.com/mapbox-gl-js/v1.8.1/mapbox-gl.js',
        ],

        'moment' => [
            'https://cdn.jsdelivr.net/npm/moment@2.26.0/moment.min.js',
            'https://cdn.jsdelivr.net/npm/moment-timezone@0.5.31/builds/moment-timezone-with-data.min.js',
        ],

        'pickr' => [
            'https://cdn.jsdelivr.net/npm/@simonwep/pickr/dist/themes/classic.min.css',
            'https://cdn.jsdelivr.net/npm/@simonwep/pickr/dist/pickr.min.js',
        ],

        'pikaday' => [
            'https://cdn.jsdelivr.net/npm/pikaday/css/pikaday.css',
            'https://cdn.jsdelivr.net/npm/pikaday/pikaday.js',
        ],

        'trix' => [
            'https://unpkg.com/trix@1.2.3/dist/trix.css',
            'https://unpkg.com/trix@1.2.3/dist/trix.js',
        ],
        */

    ],

    /*
    |--------------------------------------------------------------------------
    | NeoBlade Variants
    |--------------------------------------------------------------------------
    |
    | This configuration defines the variants for the NeoBlade package.
    | You can customize the input variants used throughout your application.
    |
    */

    'variants' => [
        'input' => [
            'base' => [
                'block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm sm:text-sm sm:leading-6',
                'placeholder:text-gray-400 ring-1 ring-inset ring-gray-300',
                'focus:ring-2 focus:ring-inset focus:ring-primary-600',
            ],
        ],
        'label' => [
            'base' => [
                'block text-sm font-medium leading-6 text-gray-900',
            ],
        ],
        'help' => [
            'base' => [
                'mt-2 text-sm',
            ],
            'intent' => [
                'default' => [
                    'text-gray-500',
                ],
                'danger' => [
                    'text-danger-600',
                ],
            ],
        ],
        'form-control' => [
            'base' => 'mt-2',
        ],
        'form-group' => [
            'base' => 'space-y-4',
        ],
    ],
];
