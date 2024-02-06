@error($field, $bag)
<p {{
    $attributes->merge([
        'class' => collect([
            data_get($variants, 'base'),
            data_get($variants, "intent.danger"),
        ])->join(' ')
    ])
}}>
    @if ($slot->isEmpty())
        {{ $message }}
    @else
        {{ $slot }}
    @endif
</p>
@enderror
