<?php

declare(strict_types=1);

namespace Initred\NeoBlade\Components\Inputs;

use Closure;
use Illuminate\Contracts\View\View;
use Initred\NeoBlade\Components\NeoBladeComponent;
use Initred\NeoBlade\Enums\NeoBladeComponentEnum;
use Initred\NeoBlade\Traits\NeoBladeTheme;

class Input extends NeoBladeComponent
{
    use NeoBladeTheme;

    public string $name;

    public string $id;

    public string $type;

    public string $value;

    /**
     * Create a new component instance.
     */
    public function __construct(
        string $name,
        ?string $id = null,
        string $type = 'text',
        ?string $value = ''
    ) {
        $this->name = $name;
        $this->id = $id ?? $name;
        $this->type = $type;
        $this->value = old($name, $value ?? '');
        self::setVariants(NeoBladeComponentEnum::INPUT);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('neo-blade::components.inputs.input');
    }
}
