<?php

declare(strict_types=1);

namespace Initred\NeoBlade\Components\Forms;

use Closure;
use Illuminate\Contracts\View\View;
use Initred\NeoBlade\Components\NeoBladeComponent;

class Form extends NeoBladeComponent
{
    public ?string $action;

    public string $method;

    public bool $hasFiles;

    /**
     * Create a new component instance.
     */
    public function __construct(?string $action = null, string $method = 'POST', bool $hasFiles = false)
    {
        $this->action = $action;
        $this->method = strtoupper($method);
        $this->hasFiles = $hasFiles;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('neo-blade::components.forms.form');
    }
}
