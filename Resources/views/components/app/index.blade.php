<x-theme::master

{{--| Title is "Title - Modelname"
    |--------------------------------------------------- --}}
    title="{{ $title ?? 'Home' }}"

{{--| Tailwind Design Classes for the first container
    |--------------------------------------------------- --}}
    class="container mx-auto antialiased {{ $class ?? '' }}">

{{--| CSS Styles
    |--------------------------------------------------- --}}
    <x-slot:style>
        @vite('Modules/Theme/Resources/assets/sass/app.scss')
        {{ $style ?? '' }}
    </x-slot:style>

{{--| JS for App
    |--------------------------------------------------- --}}
    <x-slot:script>
        @vite('Modules/Theme/Resources/assets/js/app.js')
        {{ $script }}
    </x-slot:script>

{{--| Site Content
    |------------------------------------------------- --}}
    {{ $slot }}

</x-theme::master>
