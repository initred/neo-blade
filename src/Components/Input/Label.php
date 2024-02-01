<?php

namespace Initred\NeoBlade\Components\Input;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Initred\NeoBlade\Enums\NeoBladeComponentEnum;
use Initred\NeoBlade\Traits\NeoBladeTheme;

class Label extends Component
{
    use NeoBladeTheme;

    /**
     * Create a new component instance.
     */
    public function __construct(
    ) {
        self::setVariants(NeoBladeComponentEnum::LABEL);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('neo-blade::components.input.label');
    }
}
