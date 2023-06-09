<div class="relative">
    <div class="absolute inset-0 " style="background-position: 10px 10px;"></div>
    <div class="relative rounded-sm overflow-auto">
        <div class="max-w-lg mx-auto h-96 overflow-y-scroll scrollbar bg-cover bg-no-repeat shadow-lg grayscale hover:grayscale-0 border border-prime_brand transition-all duration-1000 " style="background-image:url({{ $src }}); background-position: center -150px;">
            <div class="mt-40">
                <div class="filter-none px-2 py-4 backdrop-blur-sm bg-prime_bg/70 hover:bg-prime_bg transition-all duration-1000">
                    <x-theme::div class="border-prime_font_border_color border-t pt-2">
                        <x-theme::text.prime_small title="{!! $title !!}">

                        </x-theme::text.prime_small>
                    </x-theme::div>

                    <div class="mt-1 font-medium text-sm text-white">{{ $smalltitle ?? '' }}</div>
                    {{ $slot }}
                </div>
            </div>
        </div>
    </div>
    <div class="absolute inset-0 pointer-events-none"></div>
</div>
