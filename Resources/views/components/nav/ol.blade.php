<x-theme::nav class="{{ $class ?? '' }}" id="{{ $id ?? 'navigation' }}">
    <ol class="{{ $olclass ?? 'list-none' }}" id="{{ $olid ?? 'ol_navigation' }}">
        {{ $slot }}
    </ol>
</x-theme::nav>
