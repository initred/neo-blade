<div>
    @if(isset($label))
    {{ $label }}
    @endif
    @if(isset($input))
    <div class="{{ data_get($variants, 'base') }}">
        {{ $input }}
    </div>
    @endif
    @if(isset($error))
        {{ $error }}
    @endif
</div>
