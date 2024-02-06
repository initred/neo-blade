@props([
    'min' => '0000-01-01',
    'max' => '9999-12-31',
])

<input
    name="{{ $name }}"
    type="date"
    id="{{ $id }}"
    @if($value)value="{{ $value }}"@endif
    {{ $attributes->merge([
        'class' => data_get($variants, 'base'),
        'min' => $min,
        'max' => $max,
    ]) }}
>
