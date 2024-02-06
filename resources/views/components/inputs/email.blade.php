<input
    name="{{ $name }}"
    type="email"
    id="{{ $id }}"
    {{ $attributes->merge(['class' => data_get($variants, 'base')]) }}
>
