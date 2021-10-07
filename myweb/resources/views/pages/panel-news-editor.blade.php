@php
    $pTitle="News Editor";
@endphp
<x-app-layout >
    <x-slot name="pageTitle">
        {{ $pTitle }}
    </x-slot>

    <x-slot name="header">
        <div class="hidden sm:flex sm:flex-col sm:items-center  w-full">
            <h2 class="flex  sm:items-center font-semibold text-xl text-gray-800 leading-tight ">
                {{ $pTitle }}
            </h2>
        </div>
    </x-slot>

    {{-- default slot/page content --}}
    <div class="pt-12 pb-2 md:w-1/2 mx-auto">
        <div class="max-w-7xl mx-auto sm:px-6 ">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-md">
                <div class="p-4 bg-white border-b border-gray-200">
                    You're logged in!
                    Welcome to News Editor.
                    @isset($usr)
                        {{ $usr }}
                    @endisset
                </div>





            </div>
        </div>
    </div>

    <x-slot name="footer">
        <x-footer />
     </x-slot>
</x-app-layout>
