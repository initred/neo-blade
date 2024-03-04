<?php

declare(strict_types=1);

namespace Initred\NeoBlade\Components\Inputs;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\ViewErrorBag;
use Initred\NeoBlade\Components\NeoBladeComponent;
use Initred\NeoBlade\Enums\NeoBladeComponentEnum;
use Initred\NeoBlade\Traits\NeoBladeTheme;

class Error extends NeoBladeComponent
{
    use NeoBladeTheme;

    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $field,
        public string $bag = 'default'
    ) {
        self::setVariants(NeoBladeComponentEnum::HELP);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('neo::components.inputs.error');
    }

    public function messages(ViewErrorBag $errors): array
    {
        $bag = $errors->getBag($this->bag);

        return $bag->has($this->field) ? $bag->get($this->field) : [];
    }
}
