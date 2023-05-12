<x-theme::div class="{{ $class ?? '' }}" id="{{ $id ?? 'text_prime'}}">
    <x-theme::text.prime_title_small>
        {!! $title !!}
    </x-theme::text.prime_title_small>
    {{ $slot }}
</x-theme::div>
