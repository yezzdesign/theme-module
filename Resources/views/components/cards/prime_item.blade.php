<x-theme::cards
    src="{{ $cardImage }}">

    <x-slot:title>
        <x-theme::a href="{{ $cardHref ?? '#' }}">{{ $cardTitle }}</x-theme::a>
    </x-slot:title>

    <x-slot:smalltitle>
        <span class="hover:text-prime_brand text-justify word-break leading-relaxed">{{ $cardAuthorName ?? 'Author' }}</span> - {{ \Carbon\Carbon::parse( $cardAuthorDate ?? now() )->locale(config('app.locale'))->translatedFormat('d F Y') }}
    </x-slot:smalltitle>
    <x-theme::text.item class="text-2xl text-justify word-break leading-relaxed">
        {{ $cardContent ?? 'Content' }}
    </x-theme::text.item>
    <x-theme::text.item class="text-2xl">
        <x-theme::a.prime href="{{ $cardHref ?? '#' }}" class="text-gray-500">{{__('frontendjbc::blog.read')}}</x-theme::a.prime>
    </x-theme::text.item>
</x-theme::cards>
