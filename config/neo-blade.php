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
        'dialog' => Components\Dialog::class,
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
                    'focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-gray-400',
                    'bg-secondary-100 hover:bg-secondary-200 text-secondary-600',
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
        'checkboxes' => [
            'base' => 'space-y-5',
            'row' => [
                'base' => 'relative flex items-start',
                'input' => 'flex h-6 items-center',
                'content' => [
                    'base' => 'ml-3 grow text-sm leading-6',
                    'label' => 'font-medium text-gray-900 cursor-pointer',
                    'description' => 'text-gray-500',
                ],
            ],
        ],
        'checkbox' => [
            'base' => 'h-5 w-5 rounded border-gray-300 text-primary-600 focus:ring-primary-600',
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
            'base' => 'relative z-10',
            'panel' => [
                'wrapper' => [
                    'fixed inset-0 z-10 w-screen overflow-y-auto md:pt-auto',
                ],
                'base' => [
                    'flex min-h-dvh items-end justify-center',
                    'md:p-4 text-center sm:items-center sm:p-0',
                ],
                'form' => [
                    'relative bg-white dark:bg-gray-800 overflow-hidden',
                    'transform rounded-t-3xl sm:rounded-lg bg-white text-left shadow-xl transition-all',
                    'w-full sm:max-w-xl max-h-[80%] sm:max-h-auto flex flex-col',
                ],
                'header' => [
                    'wrapper' => 'sm:flex sm:items-start shrink-0',
                    'base' => 'p-4 md:mt-4 space-y-2',
                    'intent' => 'mx-auto flex h-12 w-12 items-center justify-center rounded-full bg-green-100',
                    'title' => 'text-lg font-semibold leading-6 text-gray-900',
                    'description' => 'mt-2 text-sm text-gray-500',
                ],
                'body' => 'md:mt-4 p-4 grow overflow-y-auto',
                'footer' => 'grid p-4 gap-2',
                'grab' => [
                    'wrapper' => 'w-full sm:hidden h-12 shrink-0',
                    'base' => 'h-full flex justify-center items-center',
                    'bar' => 'bg-gray-400 rounded-full w-[10%] h-1',
                ],
                'close' => [
                    'base' => 'absolute right-0 top-0 hidden pr-4 pt-4 sm:block',
                    'button' => [
                        'rounded-md text-gray-400',
                        'hover:text-gray-500 focus:outline-none',
                        'focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2',
                    ],
                    'svg' => 'size-6',
                ],
            ],
            'overlay' => [
                'fixed inset-0 bg-gray-500 bg-opacity-75',
            ],
        ],
        'progressbar' => [
            'base' => 'flex flex-col gap-2 w-full',
            'track' => [
                'base' => 'z-0 relative bg-primary-300/50 overflow-hidden',
                'size' => [
                    'xs' => 'h-1 rounded-sm',
                    'sm' => 'h-2 rounded',
                    'base' => 'h-2.5 rounded-lg',
                    'xl' => 'h-3 rounded-lg',
                    '2xl' => 'h-4 rounded-xl',
                ],
            ],
            'indicator' => 'h-full bg-primary-500 rounded-sm transition-transform duration-500 -translate-x-full',
            'label' => 'text-sm tracking-wider font-medium text-gray-600',
            'value' => 'text-sm text-gray-900/60',
        ],
        'select' => [
            'base' => [
                'block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm sm:text-sm sm:leading-6',
                'placeholder:text-gray-400 ring-1 ring-inset ring-gray-300',
                'focus:ring-2 focus:ring-inset focus:ring-primary-600',
            ],
        ],
    ],
];
