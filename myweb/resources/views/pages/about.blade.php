@php
    $pTitle="About";
@endphp
<x-app-layout>
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

    <div class="pt-12 pb-2 md:w-1/2 mx-auto">
        <div class="max-w-7xl mx-auto ">
            <div class="bg-gray-100 ">
                <x-content-layout>
                    About

                </x-content-layout>
            </div>
        </div>
    </div>
</x-app-layout>
