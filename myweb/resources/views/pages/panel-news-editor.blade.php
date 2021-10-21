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
    <div class=" md:w-1/2 mx-auto h-auto ">
        <div class="max-w-7xl mx-auto px-2 ">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-md">
                <div class="p-4 bg-white border-b border-gray-200 w-full text-center">
                    You're logged in!
                    Welcome to News Editor.
                    @isset($usr)
                        {{ $usr }}
                    @endisset
                </div>
                <div class="h-auto ">

                    <form action="{{ route('news.store') }}" method="POST" class="mx-4 w-max-content flex flex-col">
                        @csrf
                        <x-auth-validation-errors class="m-4" :errors="$errors"/>

                        <x-label for="title" class="m-1 " >
                            {{ __('News title:') }}
                        </x-label>
                        <x-input class="m-1 mb-2 w-full" type="text" name="title" id="title" placeholder="title...{{ old('title') }}" />
                        <x-label for="body" class="m-1">
                            {{ __('News content:') }}
                        </x-label>
                        <textarea class="m-1 mb-2w-full  h-60"  name="body" id="body" placeholder="news content..."  >
                        </textarea>



                        <x-button class="m-1 w-3/4 mx-auto h-12">
                            {{ __('Create') }}
                        </x-button>

                        <x-label for="img_path" class="m-1 ">
                            {{ __('Selected image:') }}
                        </x-label>
                        <img src="{{ asset($img_path) }}" alt="" class="w-40 h-40 mb-2">
                        <x-input class="m-1 hidden" type="text" name="img_path" id="img_path" placeholder="img path..." value="{{ $img_path }} " />
                    </form>
                    <h1 class="mx-1 mt-4 px-2 text-xl border-b border-gray-300">{{ __('Image list: ') }}</h1>
                    <x-storage :imgFiles="$images" :newsStorage=true />

                </div>




            </div>
        </div>
    </div>

    <x-slot name="footer">
        {{-- <x-footer /> --}}
     </x-slot>
</x-app-layout>
