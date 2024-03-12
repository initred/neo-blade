@props([
    'label' => null,
    'size' => 'base',
])

<div
    x-data="{ value: 0 }"
    x-modelable="value"
    role="progressbar"
    {{ $attributes->merge(['class' => data_get($variants, 'base')]) }}
>
    <div class="flex justify-between">
        <span @class(data_get($variants, 'label'))>{{ $label }}</span>
        <span @class(data_get($variants, 'value')) x-text="`${value}%`"></span>
    </div>

    <div @class([data_get($variants, 'track.base'), data_get($variants, 'track.size.'.$size)])>
        <div @class(data_get($variants, 'indicator')) :style="{ transform: `translateX(-${100 - value}%)` }"></div>
    </div>
</div>

