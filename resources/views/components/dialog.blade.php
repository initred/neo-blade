@props([
    'button',
    'intent' => null,
    'title' => null,
    'description' => null,
    'body' => null,
    'footer' => null,
])
<div
   x-data="{ open: false }"
   x-modelable="open"
   tabindex="-1"
   {{ $attributes->except(['wire:submit', 'class']) }}
>
    @if(isset($button))
    <span x-on:click="open = true" tabindex="-1">{{ $button }}</span>
    @endif

    <template x-teleport="body">
        <div
            x-dialog
            x-model="open"
            aria-labelledby="modal-title"
            role="dialog"
            aria-modal="true"
            x-clock
            @class([data_get($variants, 'base'), $attributes->get('class')])
        >
            <div
                @class(data_get($variants, 'overlay'))
                x-dialog:overlay
                x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100"
                x-transition:leave="transition ease-in duration-200"
                x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0"
            ></div>

            <div @class(data_get($variants, 'panel.wrapper'))>
                <div {{ $attributes->only('wire:submit') }} @class(data_get($variants, 'panel.base'))>
                    <form
                        @class(data_get($variants, 'panel.form'))
                        x-dialog:panel
                        x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                        x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                        x-transition:leave="transition ease-in duration-200"
                        x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                        x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                    >
                        <div
                            @class(data_get($variants, 'panel.grab.wrapper'))
                            x-data="{ startY: 0, currentY: 0, moving: false, get distance() { return this.moving ? Math.max(0, this.currentY - this.startY): 0 } }"
                            x-on:touchstart="moving = true; startY = currentY = $event.touches[0].clientY"
                            x-on:touchmove="currentY = $event.touches[0].clientY"
                            x-on:touchend="if (distance > 100) $dialog.close(); moving = false;"
                            x-effect="$el.parentElement.style.transform = 'translateY('+distance+'px)'"
                        >
                            <div @class(data_get($variants, 'panel.grab.base'))>
                                <span @class(data_get($variants, 'panel.grab.bar'))></span>
                            </div>
                        </div>

                        <div @class(data_get($variants, 'panel.close.base'))>
                            <button
                                @class(data_get($variants, 'panel.close.button'))
                                type="button"
                                @click="$dialog.close()"
                            >
                                <span class="sr-only">{{ __('close') }}</span>
                                <x-neo::icon component="neo::icons.close" @class(data_get($variants, 'panel.close.svg')) />
                            </button>
                        </div>

                        <div @class(data_get($variants, 'panel.header.wrapper'))>
                            @if($intent)
                            <div @class(data_get($variants, 'panel.header.intent'))>
                                {{ $intent }}
                            </div>
                            @endif

                            <div @class(data_get($variants, 'panel.header.base'))>
                                @if($title)
                                <h3 {{ $title->attributes->merge(['class' => data_get($variants, 'panel.header.title')]) }}>{{ $title }}</h3>
                                @endif
                                @if($description)
                                <p {{ $description->attributes->merge(['class' => data_get($variants, 'panel.header.description')]) }}>{{ $description }}</p>
                                @endif
                            </div>
                        </div>

                        @if($body)
                        <div {{ $body->attributes->merge(['class' => data_get($variants, 'panel.body')]) }}>
                            {{ $body }}
                        </div>
                        @endif

                        <div {{ $footer->attributes->merge(['class' => data_get($variants, 'panel.footer')]) }}>
                            {{ $footer }}
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </template>
</div>
