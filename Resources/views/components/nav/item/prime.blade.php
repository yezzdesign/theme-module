<li {{ $attributes->class(['whitespace-nowrap'])->except(['href', 'hreflang', 'referrerpolicy', 'target', 'rel', 'aclass']) }}>
    <x-theme::a.prime href="{{ $href ?? '#' }}" hreflang="{{ $hreflang ?? 'en' }}" referrerpolicy="{{ $referrerpolicy ?? 'origin' }}" target="{{ $target ?? '_self' }}" rel="{{ $rel ?? 'next' }}" class="{{ $aclass ?? '' }}">
        {{ $slot }}
    </x-theme::a.prime>
</li>
