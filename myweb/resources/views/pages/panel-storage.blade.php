@php
    $pTitle="Storage";
@endphp
<x-app-layout  >
    <x-slot name="pageTitle">
        {{ $pTitle }}
    </x-slot>

    <x-slot name="header">
        <div class="hidden sm:flex sm:flex-col sm:items-center  w-full">
            <h2 class="flex  sm:items-center font-semibold text-xl text-gray-500 leading-tight ">
                {{  $pTitle }}
            </h2>
        </div>
    </x-slot>

    {{-- default slot/page content --}}
    <div class=" md:w-3/4 lg:w-1/2 mx-auto p-2">
        <div class="p-4  mb-2 mx-2 bg-white border-b border-gray-200 w-max-content text-center rounded-md ">
            You're logged in!
            Welcome to  Storage.
        </div>

        <div class="max-w-7xl mx-auto px-2  ">
            <div class="bg-white overflow-hidden shadow-sm rounded-md">
                <x-auth-validation-errors class="my-4 pl-6" :errors="$errors"/>

                <form action="{{ route('storage.store') }}" method="POST" enctype="multipart/form-data" class="flex flex-col p-6">
                    @csrf
                    <x-input-image title="{{ __('Add image...') }}" selectedTitle="{{ __('Selected image: ') }}" imagePath="{{ __('No file selected.') }}"  />

                    <x-button class="m-1 w-max-content">
                        {{ __('Save ') }}
                    </x-button>
                </form>

                <h1 class="mx-1 mt-4 px-2 text-xl border-b border-gray-300">{{ __('Image list: ') }}</h1>
                <x-storage :imgFiles="$images" :delete="true" :select="false" />

            </div>
        </div>

    </div>

    <x-slot name="footer">
        {{-- <x-footer /> --}}
     </x-slot>

</x-app-layout>


