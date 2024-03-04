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
        $this->publishes([
            __DIR__.'/../config/neo-blade.php' => config_path('neo-blade.php'),
            __DIR__.'/../stubs/tailwind.neo-blade.config.js' => base_path('tailwind.neo-blade.config.js'),
        ]);

        Blade::componentNamespace('Initred\\NeoBlade\\Components', 'neo');
        $this->bootResources();
        $this->bootBladeComponents();
    }

    private function bootResources(): void
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'neo');
    }

    private function bootBladeComponents(): void
    {
        $this->callAfterResolving(BladeCompiler::class, function (BladeCompiler $blade) {
            $assets = config('neo-blade.assets', []);

            /** @var NeoBladeComponent $component */
            foreach (collect(config('neo-blade.components', []))->dot()->toArray() as $alias => $component) {
                $blade->component($component, $alias);

                $this->registerAssets($component, $assets);
            }
        });
    }

    private function registerAssets($component, array $assets): void
    {
        foreach ($component::assets() as $asset) {
            $files = (array) ($assets[$asset] ?? []);

            collect($files)
                ->filter(fn (string $file) => Str::endsWith($file, '.css'))
                ->each(fn (string $style) => NeoBlade::addStyle($style));

            collect($files)->filter(fn (string $file) => Str::endsWith($file, '.js'))
                ->each(fn (string $script) => NeoBlade::addScript($script));
        }
    }
}
