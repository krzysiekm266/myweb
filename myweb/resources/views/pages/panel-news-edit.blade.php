
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
        Welcome to News Editor .

    </div>

    <div class="max-w-7xl  px-2  mx-auto h-auto ">
        <div class="bg-white shadow-sm rounded-md h-auto p-2 ">
            <x-auth-validation-errors class="my-4 w-max-content sm:w-1/2 mx-4" :errors="$errors"/>

            <form id="news-edit" action="{{ route('news.update',['news'=>$news,'update'=>true]) }}" method="POST" class=" p-6 flex flex-col">
                @csrf
                @method('PATCH')
                <x-label  class="w-1/2 mx-auto sm:w-1/5 sm:mx-0 p-0.5  text-center bg-gray-50 text-gray-600 border-t" >
                    <span class="font-semibold text-lg">Action: </span>
                    {{ __(' Update ') }}
                </x-label>
                <x-label for="reset-button" class="w-1/2 mx-auto sm:w-1/5 sm:mx-0 p-0.5  text-center bg-gray-50 text-gray-600 border-t" >
                    {{ __(' Reset form ') }}
                </x-label>
                <div class="w-max-content border-t p-2  border-gray-200 flex flex-col ">

                    <div class="flex flex-row space-x-2 my-2 py-2">
                        <div>
                            <x-label  class="w-max-content  ">
                                {{ __(' News old image:') }}
                            </x-label>
                            <img id="img-preview" name="img_preview" src="{{ asset( $news?->img_path ?? old('img_path')) }}" alt="" class="w-40 h-40 rounded-md">
                        </div>

                        <div>
                            <x-label  class="w-max-content ">
                                {{ __(' Selected new image:') }}
                            </x-label>
                            <img name="img_preview_selected" src="{{ asset( old('img_preview_new') ?? request()->session()->get('img_preview_new') ?? '' ) }}" alt="" class="w-40 h-40 rounded-md">
                        </div>

                    </div>

                    <x-label for="title" class="w-max-content " >
                        {{ __('Update News title:') }}
                    </x-label>
                    <x-input class="mb-4 w-max-content" type="text" name="title" id="news-update-title"
                        value="{{ old('title') ?? $news?->title  }}" />

                    <x-label for="body" class="w-max-content">
                        {{ __('Update News body:') }}
                    </x-label>
                    <textarea class=" w-max-content h-60 rounded-md shadow-sm border-gray-300
                                    focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="body" id="news-update-body"  >

                        {{ old('body') ?? $news?->body}}
                    </textarea>



                    <x-button  form="news-edit" class=" w-3/4 mx-auto my-2 h-12"  >
                        {{ __('Update News') }}
                    </x-button>

                    <x-input class=" hidden" type="number" name="news_id"  value="{{ old('news_id') ?? $news?->id }}" />

                    <x-input class="" type="text" name="img_preview_new"   value="{{ old('img_preview_new') ?? request()->session()->get('img_preview_new') }}" />
                    <x-input class="" type="text" name="img_path" id="update-img-path"  value="{{ old('img_path') ?? $news?->img_path }}" />
                    <x-input class=" " type="number" name="user_id" id="update-user-id" value="{{ Auth::user()->id }} " />

                </div>

            </form>
//do poprawy
            <form id="reset" action="{{ route('news.edit',[$news]) }}" method="POST">
                <x-button id="reset-button" class=" w-3/4 mx-auto my-2 h-12"   >
                    {{   request()->session()->forget('img_preview_new') }}
                    {{ __('Reset form') }}
                </x-button>
            </form>
           {{-- I needed code here different storage component for images old one is too mesy --}}
           <x-storage :imgFiles="$images" :delete="false" :select="true"/>

        </div>
    </div>

</div>

<x-slot name="footer">
    {{-- <x-footer /> --}}
 </x-slot>


</x-app-layout>
