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
            'input' => Components\Inputs\Input::class,
            'help' => Components\Inputs\Help::class,
            'label' => Components\Inputs\Label::class,
        ],
        'form' => Components\Forms\Form::class,
        'groups' => Components\Forms\Groups::class,
        'group' => Components\Forms\Group::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Components Prefix
    |--------------------------------------------------------------------------
    |
    | This value will set a prefix for all NeoBlade components.
    | By default it's empty. This is useful if you want to avoid
    | collision with components from other libraries.
    |
    | If set with "ui", for example, you can reference components like:
    |
    | <x-ui::easy-mde />
    |
    */

    'prefix' => 'neo',

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
        'form-groups' => [
            'base' => 'space-y-4',
        ],
        'form-group' => [
            'base' => 'mt-2',
        ],
        'button' => [
            'base' => [
                'font-semibold disabled:opacity-25 disabled:cursor-not-allowed',
            ],
            'size' => [
                'default' => '',
                'xs' => 'rounded px-2 py-1 text-xs',
                'sm' => 'rounded px-2 py-1 text-sm',
                'md' => 'rounded-md px-2.5 py-1.5 text-sm',
                'lg' => 'rounded-md px-3 py-2 text-sm',
                'xl' => 'rounded-md px-3.5 py-2.5 text-sm',
                '2xl' => 'rounded-xl px-3.5 py-4 text-base',
                '3xl' => 'rounded-2xl px-3.5 py-6 text-lg',
            ],
            'color' => [
                'default' => '',
                'link' => 'hover:underline',
                'text' => [
                    'font-semibold leading-normal text-primary-600 hover:text-primary-500 dark:text-primary-400 dark:hover:text-primary-300',
                    'focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary-600',
                ],
                'primary' => [
                    'focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary-600',
                    'bg-primary-600 hover:bg-primary-500 text-white shadow-sm',
                    'dark:bg-primary-500 dark:hover:bg-primary-400 dark:focus-visible:outline-primary-500',
                ],
                'secondary' => [
                    'ring-1 ring-inset ring-secondary-300',
                    'dark:ring-0',
                    'bg-white hover:bg-secondary-50 text-secondary-900',
                    'dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white',
                ],
                'info' => [
                    'focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-info-600',
                    'bg-info-600 hover:bg-info-500 text-white shadow-sm',
                    'dark:bg-info-500 dark:hover:bg-info-400 dark:focus-visible:outline-info-500',
                ],
                'success' => [
                    'focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-success-600',
                    'bg-success-600 hover:bg-success-500 text-white shadow-sm',
                    'dark:bg-success-500 dark:hover:bg-success-400 dark:focus-visible:outline-success-500',
                ],
                'warning' => [
                    'focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-warning-600',
                    'bg-warning-600 hover:bg-warning-500 text-white shadow-sm',
                    'dark:bg-warning-500 dark:hover:bg-warning-400 dark:focus-visible:outline-warning-500',
                ],
                'danger' => [
                    'focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-danger-600',
                    'bg-danger-600 hover:bg-danger-500 text-white shadow-sm',
                    'dark:bg-danger-500 dark:hover:bg-danger-400 dark:focus-visible:outline-danger-500',
                ],
            ],
        ],
    ],
];
