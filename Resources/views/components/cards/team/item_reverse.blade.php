<x-theme::div id="{{ $cardId ?? 'card' }}" class="flex flex-col md:flex-row items-center pt-16 {{ $cardClass ?? '' }}">
    <x-theme::div class="md:pr-16 order-2 md:order-1">
        <x-theme::text.prime title="{{ $cardContentTitle ?? 'Title' }}">
            <x-theme::text.item>{{ $cardContentText ?? 'Content Text' }}</x-theme::text.item>
        </x-theme::text.prime>
    </x-theme::div>
    <x-theme::div class="order-1 md:order2 mb-16 md:pb-0 flex-none">
        <x-theme::img.prime
            src="{{ $cardImageSrc }}"
            alt="{{ $cardImageAlt ?? 'image_alt' }}"
            class="rounded-full {{ $cardImageClass ?? '' }}" />
    </x-theme::div>

</x-theme::div>
