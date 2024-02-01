<?php

namespace Initred\NeoBlade\Enums;

enum NeoBladeComponentEnum: string
{
    case INPUT = 'input';
    case TEXTAREA = 'textarea';
    case SELECT = 'select';
    case FORM_CONTROL = 'form-control';
    case LABEL = 'label';
    case HELP = 'help';

    public function getConfig(): array|string
    {
        return config('neo-blade.variants.'.$this->value, []);
    }
}
