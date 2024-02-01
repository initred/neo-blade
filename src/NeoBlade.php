<?php

declare(strict_types=1);

namespace Initred\NeoBlade;

final class NeoBlade
{
    /** @var array */
    private static $styles = [];

    /** @var array */
    private static $scripts = [];

    public static function addStyle(string $style): void
    {
        if (! in_array($style, self::$styles)) {
            self::$styles[] = $style;
        }
    }

    public static function styles(): array
    {
        return self::$styles;
    }

    public static function outputStyles(bool $force = false): string
    {
        if (! $force && self::disableScripts()) {
            return '';
        }

        return collect(self::$styles)->map(function (string $style) {
            return '<link href="'.$style.'" rel="stylesheet" />';
        })->implode(PHP_EOL);
    }

    public static function addScript(string $script): void
    {
        if (! in_array($script, self::$scripts)) {
            self::$scripts[] = $script;
        }
    }

    public static function scripts(): array
    {
        return self::$scripts;
    }

    public static function outputScripts(bool $force = false): string
    {
        if (! $force && self::disableScripts()) {
            return '';
        }

        return collect(self::$scripts)->map(function (string $script) {
            return '<script src="'.$script.'"></script>';
        })->implode(PHP_EOL);
    }

    private static function disableScripts(): bool
    {
        return ! config('app.debug');
    }
}
