<?php

declare(strict_types=1);

namespace Initred\NeoBlade\Components\Alerts;

use Closure;
use Illuminate\Contracts\View\View;
use Initred\NeoBlade\Components\NeoBladeComponent;
use Initred\NeoBlade\Enums\NeoBladeComponentEnum;
use Initred\NeoBlade\Traits\NeoBladeTheme;

class Index extends NeoBladeComponent
{
    use NeoBladeTheme;

    /**
     * Create a new component instance.
     */
    public function __construct(
    ) {
        self::setVariants(NeoBladeComponentEnum::ALERT);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('neo-blade::components.alerts.index');
    }
}
