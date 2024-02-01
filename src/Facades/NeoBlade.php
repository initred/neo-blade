<?php

namespace Initred\NeoBlade\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Initred\NeoBlade\NeoBlade
 */
class NeoBlade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Initred\NeoBlade\NeoBlade::class;
    }
}
