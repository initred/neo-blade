<?php

return [

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
