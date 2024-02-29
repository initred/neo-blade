@props([
    'icon' => null,
    'header',
    'body',
    'footer',
    'close' => false,
    'intent' => 'default'
])

<div
    role="alert"
    tabIndex="-1"
    @class([
        data_get($variants, 'wrapper.base'),
        data_get($variants, "wrapper.intent.{$intent}"),
        $attributes->get('class'),
    ])
    {{ $attributes }}
>
    <div @class([
        data_get($variants, 'base'),
    ])>
        @if($icon)
        <div @class([
            data_get($variants, 'icon.base'),
            data_get($variants, "icon.intent.{$intent}"),
            $icon->attributes->get('class'),
        ])>
            {{ $icon }}
        </div>
        @else
        <div @class([
            data_get($variants, 'icon.base'),
            data_get($variants, "icon.intent.{$intent}"),
        ])>
            @switch($intent)
                @case('info')
                    <span class="i-tabler-info-circle-filled"></span>
                    @break
                @case('success')
                    <span class="i-tabler-circle-check-filled"></span>
                    @break
                @case('warning')
                    <span class="i-tabler-alert-triangle-filled"></span>
                    @break
                @case('danger')
                    <span class="i-tabler-circle-x-filled"></span>
                    @break
            @endswitch
        </div>
        @endif
        <div>
            @if(isset($header))
            <div @class([
                data_get($variants, "header.base"),
                data_get($variants, "header.intent.{$intent}"),
                $header->attributes->get('class'),
            ])>
                {{ $header }}
            </div>
            @endif
            @if(isset($body))
            <div @class([
                data_get($variants, 'body.base'),
                data_get($variants, "body.intent.{$intent}"),
                $body->attributes->get('class'),
            ])>
                {{ $body }}
                @if(isset($footer))
                    <div @class([
                        data_get($variants, 'footer.wrapper'),
                        $footer->attributes->get('class'),
                    ])>
                        <div @class([
                            data_get($variants, "footer.base"),
                            data_get($variants, "footer.action.base"),
                            data_get($variants, "footer.action.intent.{$intent}"),
                        ])>
                            {{ $footer }}
                        </div>
                    </div>
                @endif
            </div>
            @endif
        </div>
        @if($close)
        <div>
            <button>
                <span class="i-tabler-x"></span>
            </button>
        </div>
        @endif
    </div>
</div>
