@php
    $pTitle="About";
@endphp
<x-app-layout >
    <x-slot name="pageTitle">
        {{ $pTitle }}
    </x-slot>

    <x-slot name="header">
        <div class="hidden sm:flex sm:flex-col sm:items-center  sm:w-full">
            <h2 class="flex sm:items-center font-semibold text-xl text-gray-800 leading-tight ">
                {{ $pTitle }}
            </h2>
        </div>
    </x-slot>

    <div class="pt-12 pb-2 md:w-1/2 mx-auto p-2">
        <div class="max-w-7xl mx-auto ">
            <div class="bg-gray-100 ">
                <x-content-layout class="p-2">
                    Cześć Nazywam się Krzysiek jestem programistą samoukiem.
                    Intersuje się głównie językami programowania:java i php ale dodatkowo używam też: html,css,tailwind,js,maven,git
                    W ostatnim czasie postanowiłem nauczyć się  Laravel framework.
                    Strona powstała przy użuciu wyżej wymienionego frameworka jako cześć mojego CV .
                    Więcej informacji o tym i o innych moich projektach w zakladce Projekty.

                </x-content-layout>
            </div>
        </div>
    </div>

    <x-slot name="footer">
       <x-footer />
    </x-slot>
</x-app-layout>
