@props(['news'=> null ])
@php


@endphp
<div class="flex flex-col m-2  w-3/4 md:w-2/5 sm:m-4 sm:p-0 h-auto mx-auto  shadow-xl ">
    <div  class="flex flex-col  mt-2   text-left  h-auto w-full">
        <h1 class=" inline-flex text-lg  px-2  bg-gray-800 shadow-md w-full text-gray-100 rounded-t-md">
            {{ Str::ucfirst($news?->title) ?? 'default title'; }}
        </h1>
    </div>

    <div  class="flex self-start  m-2 mt-0 pt-1  text-left  h-auto border-b border-gray-400 ">
        <p class=" inline-flex text-xs  px-1  mrounded-md font-semibold">
            {{ __('Created: '.($news?->created_at ?? '--')) }}
        </p>
        <p class=" inline-flex text-xxs  px-1  rounded-md">
            {{ __('Author: '.($news?->user->name ?? 'default author')) }}
        </p>

    </div>



    <div class=" flex flex-col  m-2 mb-0 w-max-content   h-auto">

        <div class="  flex flex-col ">
            <img class="block rounded-md w-60 h-40 m-2 self-center bg-main float-left  " src="{{ asset($news?->img_path ?? '') }}" />
            <div class=" flex flex-row   w-full  overflow-auto">
                <p class=" ">
                    {{-- {{  $news?->body ?? 'default body' }} --}}
                    <form action="" method="POST" class="flex flex-col  w-full ">
                        @csrf
                        <x-button class="w-auto ">
                            {{ __('Read more...') }}
                        </x-button>
                    </form>
                </p>
            </div>
        </div>

    </div>


    <hr class="w-max-content mx-2 my-0 mb-4 border-gray-400">

    <div class="flex flex-row space-x-1 ml-8">
        @can('delete', $news)
            <form action="{{ route('news.delete',[$news]) }}" method="POST" class="flex flex-col  ">
                @csrf
                @method('DELETE')
                <x-button class="w-auto ">
                    {{ __('Delete') }}
                </x-button>

            </form>
        @endcan

        @can('update', $news)
            <form action="{{ route('news.edit',[$news]) }}" method="POST" class="flex flex-col">
                @csrf
                <x-button class="w-auto ">
                    {{ __('Edit') }}
                </x-button>

            </form>
        @endcan
    </div>

    {{-- <hr class="w-max-content m-2 mb-0.5 border-gray-400">
    <hr class="w-max-content mx-2 my-0 mb-4 border-gray-400"> --}}

    <div  class="flex flex-col  mt-2   text-left  h-auto w-full ">
        <h1 class=" inline-flex text-lg  px-2  bg-gray-800 shadow-md w-full h-2 text-gray-100 rounded-b-md">
            {{-- {{ Str::ucfirst($news?->title) ?? 'default title'; }} --}}
        </h1>
    </div>


</div>
