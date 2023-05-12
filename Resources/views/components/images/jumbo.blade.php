<x-theme::div id="{{ $headId ?? 'jumbo_image' }}" class="{{ $headClass ?? '' }}">
    <x-theme::img.prime src="{{ $imgSrc }}"
         alt="{{ $imgAlt }}"
         class="grayscale hover:filter-none w-screen transition-all duration-3000 border rounded-sm{{ $imgClass ?? 'border-gray-500' }}" />
</x-theme::div>
