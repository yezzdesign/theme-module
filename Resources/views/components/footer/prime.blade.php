<x-theme::divide.prime/>

<x-theme::footer class="{{ $heightclass ?? 'my-6' }}">

    <x-theme::div class="flex flex-row justify-around text-sm md:text-lg items-baseline text-gray-400">

        <x-theme::div id="footer_copyright">
            <x-theme::footer.item>
                {{ $copyslot ?? ('&copy; ' . (config('acp.website_author') ?? 'Yezz.Design') . ', - 2023') }}
            </x-theme::footer.item>
        </x-theme::div>

        <x-theme::div id="footer_links" class="flex justify-between divide-x">
            {{ $slot }}
        </x-theme::div>

    </x-theme::div>

</x-theme::footer>
