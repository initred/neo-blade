@props([
    'intent' => 'default'
])

<p {{
    $attributes->merge([
        'class' => collect([
            data_get($variants, 'base'),
            data_get($variants, "intent.{$intent}")
        ])->join(' ')
    ])
}}>
    {{ $slot }}
</p>
