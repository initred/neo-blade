<?php

namespace Initred\NeoBlade\Enums;

enum NeoBladeComponentEnum: string
{
    case INPUT = 'input';
    case LABEL = 'label';
    case HELP = 'help';
    case TEXTAREA = 'textarea';
    case FORM_GROUPS = 'form-groups';
    case FORM_GROUP = 'form-group';
    case BUTTON = 'button';
    case ALERT = 'alert';
    case DIALOG = 'dialog';
    case PROGRESSBAR = 'progressbar';
    case CHECKBOXES = 'checkboxes';
    case CHECKBOX = 'checkbox';
    case SELECT = 'select';

    public function getConfig(): array|string
    {
        return config('neo-blade.variants.'.$this->value, []);
    }
}
