<?php

namespace Initred\NeoBlade\Enums;

enum NeoBladeComponentEnum: string
{
    case INPUT = 'input';
    case LABEL = 'label';
    case HELP = 'help';
    case TEXTAREA = 'textarea';
    case SELECT = 'select';
    case FORM_GROUPS = 'form-groups';
    case FORM_GROUP = 'form-group';
    case BUTTON = 'button';

    public function getConfig(): array|string
    {
        return config('neo-blade.variants.'.$this->value, []);
    }
}
