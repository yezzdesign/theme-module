<li class="hoverable hidden md:block {{ $class ?? '' }}">

    {{-- Menu Name --}}
    <x-theme::a.prime rel="">{{ $name ?? 'Menu' }}</x-theme::a.prime>

    {{-- Mega Content --}}
    <div class="mega-menu mb-0 shadow shadow-prime_brand bg-prime_bg border border-prime_font_border_color rounded-sm">
        <div class="container mx-auto w-full flex justify-between mx-2">
                {{ $slot }}
        </div>
    </div>
</li>
