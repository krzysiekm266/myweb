
@php
    $pTitle="News Editor";

@endphp
<x-app-layout  >
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
    <div class=" md:w-3/4 lg:w-1/2 mx-auto p-2">
        <div class="p-4  mb-2 mx-2 bg-white border-b border-gray-200 w-max-content text-center rounded-md ">
            You're logged in!
            Welcome to News Editor.
        </div>

        <div class="max-w-7xl  px-2  mx-auto h-auto ">
            <div class="bg-white shadow-sm rounded-md h-auto p-2 ">
                <x-auth-validation-errors class="my-4 w-max-content sm:w-1/2 sm:mx-auto" :errors="$errors"/>
                <form action="{{ route('news.store') }}" method="POST" class=" p-6 flex flex-col">
                    @csrf
                    <div class="w-max-content border-t border-gray-200 flex flex-col ">
                        <x-label for="img_path" class="w-max-content ">
                            {{ __('Selected image:') }}
                        </x-label>
                        <img src="{{ asset($img_path ) }}" alt="" class="w-40 h-40 ">

                        <x-label for="title" class="w-max-content " >
                            {{ __('News title:') }}
                        </x-label>
                        <x-input class=" w-max-content" type="text" name="title" id="title" placeholder="title..." value="{{ old('title')  }}" />

                        <x-label for="body" class="w-max-content">
                            {{ __('News body:') }}
                        </x-label>
                        <textarea class=" w-max-content h-60"  name="body" id="body"  >
                            {{ old('body') }}
                        </textarea>

                        <x-button class=" w-3/4 mx-auto my-2 h-12">
                            {{ __('Create') }}
                        </x-button>

                        <x-input class=" hidden" type="text" name="img_path" id="img_path"  value="{{ $img_path }} " />
                        <x-input class=" hidden" type="number" name="user_id" id="user_id" value="{{ Auth::user()->id }} " />
                    </div>

                </form>

                <h1 class="mx-1 mt-4 px-2 text-xl border-b border-gray-300">{{ __('Image list: ') }}</h1>
                <x-storage :imgFiles="$images" :newsStorage=true />

            </div>
        </div>
    </div>

    <x-slot name="footer">
        {{-- <x-footer /> --}}
     </x-slot>
</x-app-layout>
