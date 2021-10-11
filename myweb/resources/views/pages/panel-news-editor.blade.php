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
    <div class=" md:w-1/2 mx-auto">
        <div class="max-w-7xl mx-auto px-2 ">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-md">
                <div class="p-4 bg-white border-b border-gray-200 w-full text-center">
                    You're logged in!
                    Welcome to News Editor.
                    @isset($usr)
                        {{ $usr }}
                    @endisset
                </div>
                <div >
                    <form action="{{ route('news.store') }}" method="POST" class="mx-4 w-max-content ">
                        @csrf
                        <x-auth-validation-errors class="m-4" :errors="$errors"/><br>
                        <x-label for="title" >
                            {{ __('News title:') }}
                        </x-label>
                        <x-input class="m-1 w-full" type="text" name="title" id="title" placeholder="title..." />
                        <x-label for="body">
                            {{ __('News content:') }}
                        </x-label>
                        <textarea class="m-1 w-full  h-60"  name="body" id="body" placeholder="news content..."  >
                        </textarea>
                        <x-label for="img_path">
                            {{ __('Image:') }}
                        </x-label>
                        <x-input class="m-1" type="text" name="img_path" id="img_path" placeholder="img path..."  /><br>

                        <x-button class="m-1">
                            {{ __('Create') }}
                        </x-button>

                    </form>


                </div>




            </div>
        </div>
    </div>

    <x-slot name="footer">
        {{-- <x-footer /> --}}
     </x-slot>
</x-app-layout>
