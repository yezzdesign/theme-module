<x-theme::app
{{--|---------------------------------------------------
    | Title is "Title - Modelname"
    |--------------------------------------------------- --}}
    title="{{ $title ?? 'Home' }}"

{{--|---------------------------------------------------
    | Tailwind Design Classes for the first container
    |--------------------------------------------------- --}}
    class="text-prime_font_color font-prime_font bg-prime_bg text-lg md:text-3xl {{ $class ?? '' }}">

{{--|---------------------------------------------------
    | CSS Styles
    |--------------------------------------------------- --}}
    <x-slot:style>
        {{ $style ?? '' }}
    </x-slot:style>

{{--|---------------------------------------------------
    | JS for App
    |--------------------------------------------------- --}}
    <x-slot:script>
        {{ $script ?? '' }}
    </x-slot:script>

{{--|---------------------------------------------------
    | Site Content
    |--------------------------------------------------- --}}
    {{ $slot }}

</x-theme::app>
