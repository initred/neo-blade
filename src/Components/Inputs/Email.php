<?php

declare(strict_types=1);

namespace Initred\NeoBlade\Components\Inputs;

use Closure;
use Illuminate\Contracts\View\View;
use Initred\NeoBlade\Traits\NeoBladeTheme;

class Email extends Input
{
    use NeoBladeTheme;

    /**
     * Create a new component instance.
     */
    public function __construct(
        string $name = 'email', ?string $id = null, ?string $value = ''
    ) {
        parent::__construct($name, $id, 'email', $value);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('neo::components.inputs.email');
    }
}
