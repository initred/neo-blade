@props([
  'size' => 'default',
  'color' => 'default',
])

<a
    @class([
        data_get($variants, 'base'),
        data_get($variants, "size.{$size}"),
        data_get($variants, "color.{$color}"),
    ])
>
    {{ $slot }}
</a>
