<?php

declare(strict_types=1);

namespace Initred\NeoBlade\Components;

use Illuminate\View\Component as IlluminateComponent;

abstract class NeoBladeComponent extends IlluminateComponent
{
    /** @var array */
    protected static $assets = [];

    public static function assets(): array
    {
        return static::$assets;
    }
}
