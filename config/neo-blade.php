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
            'button' => Components\Inputs\Button::class,
            'date' => Components\Inputs\Date::class,
            'error' => Components\Inputs\Error::class,
        ],
        'alerts' => [
            'index' => Components\Alerts\Index::class,
        ],
        'form' => Components\Forms\Form::class,
        'groups' => Components\Forms\Groups::class,
        'group' => Components\Forms\Group::class,
        'dialog' => Components\Dialogs\Dialog::class,
        'link' => Components\Link::class,
    ],

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
        'alert' => [
            'wrapper' => [
                'base' => 'rounded-md text-pretty p-4',
                'intent' => [
                    'default' => 'bg-white dark:bg-black',
                    'primary' => 'bg-primary-50',
                    'secondary' => 'bg-secondary-50',
                    'info' => 'bg-info-50',
                    'success' => 'bg-success-50',
                    'warning' => 'bg-warning-50',
                    'danger' => 'bg-danger-50',
                ],
                'accent' => [
                    'base' => 'border-l-4',
                    'intent' => [
                        'default' => 'border-gray-400',
                        'primary' => 'border-primary-400',
                        'secondary' => 'border-secondary-400',
                        'info' => 'border-info-400',
                        'success' => 'border-success-400',
                        'warning' => 'border-warning-400',
                        'danger' => 'border-danger-400',
                    ],
                ],
            ],
            'base' => 'flex gap-3',
            'icon' => [
                'base' => 'flex-shrink-0 text-xl',
                'intent' => [
                    'default' => '*:text-gray-600 dark:*:text-gray-400',
                    'primary' => '*:text-primary-600',
                    'secondary' => '*:text-secondary-400',
                    'info' => '*:text-info-400',
                    'success' => '*:text-success-400',
                    'warning' => '*:text-warning-400',
                    'danger' => '*:text-danger-400',
                ],
            ],
            'close' => [
                'base' => '',
            ],
            'header' => [
                'base' => 'text-sm font-medium',
                'intent' => [
                    'default' => 'text-gray-900 dark:text-white',
                    'primary' => 'text-primary-800',
                    'secondary' => 'text-secondary-800',
                    'info' => 'text-info-800',
                    'success' => 'text-success-800',
                    'warning' => 'text-warning-800',
                    'danger' => 'text-danger-800',
                ],
            ],
            'body' => [
                'base' => [
                    'text-sm',
                    '[&>ul]:list-disc [&>ul]:list-inside [&>ul]:list-disc',
                    '[&>dl>dt]:font-medium [&>dl>dd]:pl-6',
                    '[&>a]:font-medium [&>a]:underline [&>a]:hover:underline',
                ],
                'intent' => [
                    'default' => 'text-gray-900 dark:text-white',
                    'primary' => 'text-primary-800',
                    'secondary' => 'text-secondary-800',
                    'info' => 'text-info-800',
                    'success' => 'text-success-800',
                    'warning' => 'text-warning-800',
                    'danger' => 'text-danger-800',
                ],
            ],
            'footer' => [
                'wrapper' => 'mt-4',
                'base' => '-mx-2 -my-1.5 flex',
                'action' => [
                    'base' => [
                        '[&>button]:rounded-md [&>button]:px-2 [&>button]:py-1.5',
                        '[&>button]:dark:text-white [&>button]:text-sm [&>button]:font-medium',
                        '[&>button]:focus:outline-none [&>button]:focus:ring-2 [&>button]:focus:ring-offset-2',
                        '[&>button]:bg-transparent',
                        '[&>a]:rounded-md [&>a]:px-2 [&>a]:py-1.5',
                        '[&>a]:dark:text-white [&>a]:text-sm [&>a]:font-medium',
                        '[&>a]:focus:outline-none [&>a]:focus:ring-2 [&>a]:focus:ring-offset-2',
                        '[&>a]:bg-transparent',
                    ],
                    'intent' => [
                        'default' => [
                            '[&>button:hover]:bg-gray-100 [&>button:hover]:dark:bg-gray-700',
                            '[&>button]:text-gray-900',
                            '[&>a:hover]:bg-gray-100 [&>a:hover]:dark:bg-gray-700',
                            '[&>a:hover]:text-gray-900',
                        ],
                        'primary' => [
                            '[&>button:hover]:bg-primary-100 [&>button:hover]:dark:bg-primary-700',
                            '[&>button:hover]:text-primary-800',
                            '[&>a:hover]:bg-primary-100 [&>a:hover]:dark:bg-primary-700',
                            '[&>a:hover]:text-primary-800',
                        ],
                        'secondary' => [
                            '[&>button:hover]:bg-secondary-100 [&>button:hover]:dark:bg-secondary-700',
                            '[&>button:hover]:text-secondary-800',
                            '[&>a:hover]:bg-secondary-100 [&>a:hover]:dark:bg-secondary-700',
                            '[&>a:hover]:text-secondary-800',
                        ],
                        'info' => [
                            '[&>button:hover]:bg-info-100 [&>button:hover]:dark:bg-info-700',
                            '[&>button:hover]:text-info-800',
                            '[&>a:hover]:bg-info-100 [&>a:hover]:dark:bg-info-700',
                            '[&>a:hover]:text-info-800',
                        ],
                        'success' => [
                            '[&>button:hover]:bg-success-100 [&>button:hover]:dark:bg-success-700',
                            '[&>button:hover]:text-success-800',
                            '[&>a:hover]:bg-success-100 [&>a:hover]:dark:bg-success-700',
                            '[&>a:hover]:text-success-800',
                        ],
                        'warning' => [
                            '[&>button:hover]:bg-warning-100 [&>button:hover]:dark:bg-warning-700',
                            '[&>button:hover]:text-warning-800',
                            '[&>a:hover]:bg-warning-100 [&>a:hover]:dark:bg-warning-700',
                            '[&>a:hover]:text-warning-800',
                        ],
                        'danger' => [
                            '[&>button:hover]:bg-danger-100 [&>button:hover]:dark:bg-danger-700',
                            '[&>button:hover]:text-danger-800',
                            '[&>a:hover]:bg-danger-100 [&>a:hover]:dark:bg-danger-700',
                            '[&>a:hover]:text-danger-800',
                        ],
                    ],
                ],
            ],
        ],
        'dialog' => [
            'wrapper' => 'relative z-10',
            'base' => [
                'fixed inset-0 z-10 w-screen overflow-y-auto',
                '[&>div]:flex [&>div]:min-h-dvh [&>div]:items-end [&>div]:justify-center',
                '[&>div]:p-4 [&>div]:text-center [&>div]:sm:items-center [&>div]:sm:p-0',
            ],
            'overlay' => [
                'fixed inset-0 bg-gray-500 bg-opacity-75',
            ],
            'content' => [
                'relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all',
                'sm:w-full sm:max-w-sm',
                'px-4 pb-4 pt-5 sm:my-8 sm:p-6',
            ],
            'close' => [
                'absolute right-0 top-0 hidden pr-4 pt-4 sm:block',
                '[&>button]:rounded-md [&>button]:text-gray-400',
                '[&>button]:hover:text-gray-500 [&>button]:focus:outline-none',
                '[&>button]:focus:ring-2 [&>button]:focus:ring-indigo-500 [&>button]:focus:ring-offset-2',
                '[&>button>svg]:h-6 [&>button>svg]:w-6',
            ],
            'header' => [
                'flex justify-between px-4 py-3 bg-white dark:bg-black',
                'border-b border-gray-200 dark:border-gray-700',
                'rounded-t-lg',
            ],
            'title' => [
                'text-lg font-medium leading-6 text-gray-900 dark:text-white',
            ],
            'body' => [
                'px-4 py-3',
            ],
            'footer' => [
                'flex justify-end px-4 py-3 bg-white dark:bg-black',
                'border-t border-gray-200 dark:border-gray-700',
                'rounded-b-lg',
            ],
        ],
    ],
];
