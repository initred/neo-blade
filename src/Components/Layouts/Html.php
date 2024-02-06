<?php

declare(strict_types=1);

namespace Initred\NeoBlade\Components\Layouts;

use Closure;
use Illuminate\Contracts\View\View;
use Initred\NeoBlade\Components\NeoBladeComponent;

class Html extends NeoBladeComponent
{
    protected string $title;

    /**
     * Create a new component instance.
     */
    public function __construct(string $title = '')
    {
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('neo-blade::components.layouts.html');
    }

    public function title(): string
    {
        $APP_NAME = config('app.name', 'Laravel');

        return $this->title ? $this->title.' - '.$APP_NAME : $APP_NAME;
    }
}
