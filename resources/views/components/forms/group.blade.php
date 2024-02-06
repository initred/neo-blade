@props([
    'label',
    'input',
    'error',
])

<div {{ $attributes }}>
    @if(isset($label))
    {{ $label }}
    @endif
    @if(isset($input))
    <div {{ $input->attributes->merge(['class' => data_get($variants, 'base') ]) }}>
        {{ $input }}
    </div>
    @endif
    @if(isset($error))
        {{ $error }}
    @endif
    {{ $slot }}
</div>
