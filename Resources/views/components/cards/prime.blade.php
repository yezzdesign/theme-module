<x-theme::div id="{{ $headId ?? 'cards' }}" class="{{ $headDivClass ?? '' }}">

    <x-theme::text.prime.easy title-content="{{ $titleHead ?? 'Last Blogs' }}" content="{{ $titleContent ?? 'Here you can find the last BlogPosts' }}"/>

    <x-theme::div class="">
        {{ $slot }}
    </x-theme::div>
</x-theme::div>
