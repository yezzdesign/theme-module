<x-theme::div id="{{ $headId ?? 'cards_3_row' }}" class="{{ $headDivClass ?? '' }}">

    <x-theme::text.prime.easy title-content="{{ $titleHead ?? 'Last Blogs' }}" content="{{ $titleContent ?? 'Here you can find the last BlogPosts' }}"/>

    <x-theme::div class="grid grid-cols-1 md:grid-cols-3 space-y-4 md:space-y-0 md:space-x-4">
        {{ $slot }}
    </x-theme::div>
</x-theme::div>
