@props([
    'legend' => null,
    'name',
    'items' => [],
    'error' => null,
])

<fieldset {{ $attributes->whereDoesntStartWith(['wire:model', 'x-model']) }}>
    <legend class="sr-only">{{ !empty($legend) ? $legend : $name }}</legend>

    <div @class(data_get($variants, 'base'))>
        @if($items instanceof \Illuminate\View\ComponentSlot)
            {{ $items }}
        @else
            @foreach($items as $item)
            <x-neo::inputs.checkboxes-row :key="$item['id']" :id="$item['id']" :name="$name" :value="$item['value']" {{ $attributes->whereStartsWith(['wire:model', 'x-model']) }}>
                <x-slot:label>{{ $item['label'] }}</x-slot:label>
                @if($item['description'])
                <x-slot:description>{{ $item['description'] }}</x-slot:description>
                @endif
            </x-neo::inputs.checkboxes-row>
            @endforeach
        @endif
    </div>

    @if($error) {{ $error }} @endif
</fieldset>
