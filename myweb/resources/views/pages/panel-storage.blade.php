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
                    Welcome to Administrator Panel Storage.
                </div>
                <div>
                    <form action="{{ route('storage.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <x-auth-validation-errors class="m-4" :errors="$errors"/><br>
                        <x-label for="new_file" >
                            {{ __('Add new file: ') }}
                        </x-label>
                        <img src="" alt="image_preview" class="w-20 h-20">
                        <x-input id="new_file" name="new_file"  type="file" class="m-1 h-10 w-full"/><br>
                        <x-button class="m-1">
                            {{ __('Add file') }}
                        </x-button>
                    </form>
                </div>
                <h1 class="mx-1 mt-4 px-2 text-xl border-b border-gray-300">{{ __('Image list: ') }}</h1>
                {{-- stored files --}}
                <div class="flex flex-wrap p-1">

                    @isset($files)

                        @foreach ($files as $file)
                            <img src="{{asset($file) }}" alt="altpath" class="w-28 h-28 m-1" />
                        @endforeach
                    @endisset
                </div>

            </div>
        </div>
    </div>

    <x-slot name="footer">
        {{-- <x-footer /> --}}
     </x-slot>
</x-app-layout>


