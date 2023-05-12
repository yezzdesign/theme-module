<x-theme::div id="{{ $cardId ?? 'card' }}" class="flex flex-col md:flex-row items-center pt-16 {{ $cardClass ?? '' }}">
    <x-theme::div class="flex-none">
    <x-theme::img.prime src="{{ $cardImageSrc }}" alt="{{ $cardImageAlt ?? 'image_alt' }}" class="rounded-full mb-16 md:pb-0 {{ $cardImageClass ?? '' }}" />
    </x-theme::div>
    <x-theme::div class="md:pl-16">
        <x-theme::text.prime title="{{ $cardContentTitle ?? 'Title' }}">
            <x-theme::text.item>{{ $cardContentText ?? 'Content Text' }}</x-theme::text.item>
        </x-theme::text.prime>
    </x-theme::div>
</x-theme::div>
