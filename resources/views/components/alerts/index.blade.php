@props([
    'header',
    'body',
    'color' => 'default'
])

<div
    role="alert"
    tabIndex="-1"
    @class([
        data_get($variants, 'wrapper.base'),
        data_get($variants, "wrapper.color.{$color}"),
    ])
    {{ $attributes }}
>
    <div class="flex">
        @if(isset($icon))
        <div class="flex-shrink-0">
            {{ $icon }}
        </div>
        @endif
        <div
            @class([
                data_get($variants, 'base'),
            ])
        >
            @if(isset($header))
            <div
                @class([
                    data_get($variants, "header.base"),
                    data_get($variants, "header.color.{$color}"),
                ])
            >
                {{ $header }}
            </div>
            @endif
            @if(isset($body))
            <div
                @class([
                    data_get($variants, 'body.base'),
                    data_get($variants, "body.color.{$color}"),
                ])
            >
                {{ $body }}
            </div>
            @endif
        </div>
    </div>
</div>
