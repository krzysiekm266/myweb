@php
    $pTitle="Storage";
@endphp
<x-app-layout >
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
    <div class="md:w-1/2 mx-auto">
        <div class="max-w-7xl mx-auto sm:px-6 ">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-md">
                <div class="p-4 bg-white border-b border-gray-200 text-center">
                    You're logged in!
                    Welcome to  Storage.
                </div>
                <div>
                    <form action="{{ route('storage.store') }}" method="POST" enctype="multipart/form-data" class="flex flex-col">
                        @csrf
                        <x-auth-validation-errors class="m-4" :errors="$errors"/><br>
                        <x-input-image title="{{ __('Add image...') }}" selectedTitle="{{ __('Selected image: ') }}" imagePath="{{ __('No file selected.') }}"  />
                        <br>
                        <x-button class="m-1 w-max-content">
                            {{ __('Save ') }}
                        </x-button>
                    </form>
                </div>
                <h1 class="mx-1 mt-4 px-2 text-xl border-b border-gray-300">{{ __('Image list: ') }}</h1>
                {{-- stored files --}}
                <x-storage :imgFiles="$images" />

            </div>
        </div>
    </div>

    <x-slot name="footer">
        {{-- <x-footer /> --}}
     </x-slot>
</x-app-layout>


