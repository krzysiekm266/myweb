@php
    $pTitle="Projects Editor";
@endphp
<x-app-layout  >
    <x-slot name="pageTitle">
        {{ $pTitle }}
    </x-slot>

    <x-slot name="header">
        <div class="hidden sm:flex sm:flex-col sm:items-center  w-full">
            <h2 class="flex  sm:items-center font-semibold text-xl text-gray-800 leading-tight ">
                {{  $pTitle }}
            </h2>
        </div>
    </x-slot>

    {{-- default slot/page content --}}
    <div class=" md:w-3/4 lg:w-1/2 mx-auto p-2">
        <div class="p-4  mb-2 mx-2 bg-white border-b border-gray-200 w-max-content text-center rounded-md ">
            You're logged in!
            Welcome to Project Editor.
        </div>

        <div class="max-w-7xl mx-auto px-2  ">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-md">




            </div>
        </div>
    </div>

    <x-slot name="footer">
        {{-- <x-footer /> --}}
     </x-slot>
</x-app-layout>


