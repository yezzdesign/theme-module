<x-theme::div class="{{ $class ?? '' }}" id="{{ $id ?? 'text_prime'}}">
    <x-theme::text.prime_title class="{{ $titleClass ?? '' }}">
        {!! $title !!}
    </x-theme::text.prime_title>
    <x-theme::p.prime class="{{ $contentClass ?? '' }}">
        {{ $slot }}
    </x-theme::p.prime>
</x-theme::div>
