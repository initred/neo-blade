<?php

namespace Initred\NeoBlade\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \VendorName\Skeleton\Skeleton
 */
class NeoBlade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Initred\NeoBlade\NeoBlade::class;
    }
}
