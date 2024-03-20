<select {{ $attributes->merge(['class' => data_get($variants, 'base')]) }}>
    {{ $slot }}
</select>
