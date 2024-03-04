<?php

declare(strict_types=1);

namespace Initred\NeoBlade\Components\Dialogs;

use Closure;
use Illuminate\Contracts\View\View;
use Initred\NeoBlade\Components\NeoBladeComponent;
use Initred\NeoBlade\Enums\NeoBladeComponentEnum;
use Initred\NeoBlade\Traits\NeoBladeTheme;

class Dialog extends NeoBladeComponent
{
    use NeoBladeTheme;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        self::setVariants(NeoBladeComponentEnum::DIALOG);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('neo::components.dialogs.dialog');
    }
}
