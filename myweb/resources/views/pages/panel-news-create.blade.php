
@php
    $pTitle="News Editor";

@endphp
<x-app-layout  >
    <x-slot name="pageTitle">
        {{ $pTitle }}
    </x-slot>

    <x-slot name="header">
        <div class="hidden sm:flex sm:flex-col sm:items-center  w-full">
            <h2 class="flex  sm:items-center font-semibold text-xl text-gray-500 leading-tight ">
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
                <x-auth-validation-errors class="my-4 w-max-content sm:w-1/2 mx-4" :errors="$errors"/>
                <form action="{{ route('news.store') }}" method="POST" class=" p-6 flex flex-col">
                    @csrf
                    <x-label  class="w-1/2 mx-auto sm:w-1/5 sm:mx-0 p-0.5  text-center bg-gray-50 text-gray-600 border-t" >
                        <span class="font-semibold text-lg">Action: </span>
                        {{ __(' Create ') }}
                    </x-label>
                    <div class="w-max-content border-t p-2  border-gray-200 flex flex-col ">
                        <div class="mx-auto">
                            <x-label for="img_path" class="w-max-content ">
                                {{ __('Selected image:') }}
                            </x-label>
                            <img id="img-preview" name="img_preview" src="{{ asset( $img_path ?? old('img_path')) }}" alt="" class="w-40 h-40 ">
                        </div>

                        <x-button id="select-image-button" formaction="{{ route('image.index') }}" formmethod="POST"  class=" w-3/4 mx-auto my-2 h-12">
                            {{ __('Select image...') }}
                        </x-button>
                        <x-label for="title" class="w-max-content " >
                            {{ __('News title:') }}
                        </x-label>
                        <x-input class="mb-4 w-max-content" type="text" name="title" id="news-title" placeholder="title..."
                            value="{{ old('title')  }}" />

                        <x-label for="body" class="w-max-content">
                            {{ __('News body:') }}
                        </x-label>
                        <textarea class=" w-max-content h-60 rounded-md shadow-sm border-gray-300
                                        focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="body" id="news-body"  >

                            {{ request()->input('body') ?? old('body') }}
                        </textarea>

                        <x-button id="create-news-button" class=" w-3/4 mx-auto my-2 h-12">
                            {{ __('Create News') }}
                        </x-button>

                        <x-input class=" " type="text" name="img_path" id="img-path"  value="{{ $img_path ?? old('img_path') }} " hidden/>
                        <x-input class=" " type="number" name="user_id" id="user-id" value="{{ Auth::user()->id }} " hidden/>

                    </div>

                </form>

                {{-- <h1 class="mx-1 mt-4 px-2 text-xl border-b border-gray-300">{{ __('Image list: ') }}</h1> --}}
                {{-- <x-storage :imgFiles="$images" :delete="false" :select="true"/>  --}}

            </div>
        </div>

    </div>

    <x-slot name="footer">
        {{-- <x-footer /> --}}
     </x-slot>

    {{-- <script>
        window.addEventListener('load', ()=>{
            let title = document.getElementById("news-title");
            let body = document.getElementById("news-body");

            console.log('Before: ',title.value);
            console.log('Before: ',body.value);

            if( title.value === undefined ||  title.value === null  || title.value === "")
            {

                title.value =  window.sessionStorage.getItem("title");
            }

                body.value  =  window.sessionStorage.getItem("body");

            console.log('After: ',title.value);
            console.log('After: ',body.value);

        },false);

    </script> --}}
</x-app-layout>
