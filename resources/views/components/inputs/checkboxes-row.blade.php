@props([
    'id',
    'name',
    'value',
    'label',
    'description' => null,
    'action' => null,
])

<div
    @class(data_get($variants, 'row.base'))
    {{ $attributes->whereDoesntStartWith(['wire:model', 'x-model']) }}
>
    <div @class(data_get($variants, 'row.input'))>
        <x-neo::inputs.checkbox
            {{ $attributes->whereStartsWith(['wire:model', 'x-model']) }}
            :id="$id"
            :value="$value"
            :name="$name"
        />
    </div>
    <div @class(data_get($variants, 'row.content.base'))>
        <label for="{{ $id }}" @class(data_get($variants, 'row.content.label'))>{{ $label }}</label>
        @if(isset($description))
        <p @class(data_get($variants, 'row.content.description'))>{{ $description }}</p>
        @endif
    </div>
    @if($action)
    <div {{ $action->attributes }}>
        {{ $action }}
    </div>
    @endif
</div>
