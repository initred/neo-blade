<?php

namespace Initred\NeoBlade;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;
use Illuminate\View\Compilers\BladeCompiler;
use Initred\NeoBlade\Components\NeoBladeComponent;

final class NeoBladeServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/neo-blade.php', 'neo-blade');
    }

    public function boot(): void
    {
        $this->bootResources();
        $this->bootBladeComponents();
        logger(config('neo-blade.prefix'));
        Blade::componentNamespace('Initred\\NeoBlade\\Components', config('neo-blade.prefix'));
    }

    private function bootResources(): void
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'neo-blade');
    }

    private function bootBladeComponents(): void
    {
        $this->callAfterResolving(BladeCompiler::class, function (BladeCompiler $blade) {
            $prefix = config('neo-blade.prefix', '');
            $assets = config('neo-blade.assets', []);

            /** @var NeoBladeComponent $component */
            foreach (collect(config('neo-blade.components', []))->dot()->toArray() as $alias => $component) {
                $blade->component($component, $alias, $prefix);

                $this->registerAssets($component, $assets);
            }
        });
    }

    private function registerAssets($component, array $assets): void
    {
        foreach ($component::assets() as $asset) {
            $files = (array) ($assets[$asset] ?? []);

            collect($files)->filter(function (string $file) {
                return Str::endsWith($file, '.css');
            })->each(function (string $style) {
                NeoBlade::addStyle($style);
            });

            collect($files)->filter(function (string $file) {
                return Str::endsWith($file, '.js');
            })->each(function (string $script) {
                NeoBlade::addScript($script);
            });
        }
    }
}
