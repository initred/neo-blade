@props([
  'size' => 'default',
  'color' => 'default',
])

<a
    {{
        $attributes->merge([
            'class' => collect([
                data_get($variants, 'base'),
                data_get($variants, "size.{$size}"),
                data_get($variants, "color.{$color}"),
            ])->join(' ')
        ])
    }}
>{{ $slot }}</a>
