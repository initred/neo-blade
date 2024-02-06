<div {{ $attributes->merge(['class' => data_get($variants, 'base')]) }}>
    {{ $slot }}
</div>
