@props([
    'title' => null,
    'actions' => null,
])

<div
    aria-labelledby="modal-title"
    role="dialog"
    aria-modal="true"
    x-data="{ open: false }"
    x-modelable="open"
    x-show="open"
    x-clock
    {{ $attributes->merge(['class' => data_get($variants, 'wrapper')]) }}
>
    <div
        @class(data_get($variants, 'overlay'))
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
    />

    <div @class(data_get($variants, 'base'))>
        <div>
            <div
                @class(data_get($variants, 'content'))
                x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                x-transition:leave="transition ease-in duration-200"
                x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
            >
                <div @class(data_get($variants, 'close'))>
                    <button
                        type="button"
                        @click="open = false"
                    >
                        <span class="sr-only">Close</span>
                        <x-neo::icon component="neo::icons.close" />
                    </button>
                </div>
                <div class="sm:flex sm:items-start">
                    <div class="mx-auto flex h-12 w-12 items-center justify-center rounded-full bg-green-100">
                      svg
                    </div>
                    <div class="mt-3 text-center sm:mt-5">
                        {{ $slot }}
                    </div>
                </div>
                <div class="mt-5 sm:mt-6">
                    {{ $actions }}
                </div>
            </div>
        </div>
    </div>
</div>
