<?php

namespace Initred\NeoBlade\Traits;

use Illuminate\Support\Arr;
use Initred\NeoBlade\Enums\NeoBladeComponentEnum;

trait NeoBladeTheme
{
    public array $variants;

    protected function getVariants(?string $key = null): array
    {
        if (empty($key)) {
            return $this->variants;
        }

        return $this->variants[$key];
    }

    protected function setVariants(NeoBladeComponentEnum $component): void
    {
        $config = $this->implodeRecursive($component->getConfig());
        $this->variants = $config;
    }

    private function implodeRecursive(array $array): array
    {
        $result = [];

        foreach ($array as $key => $value) {
            if (is_array($value)) {
                if (array_keys($value) === range(0, count($value) - 1)) {
                    $result[$key] = Arr::toCssClasses($value);
                } else {
                    $result[$key] = $this->implodeRecursive($value);
                }
            } else {
                $result[$key] = $value;
            }
        }

        return $result;
    }
}
