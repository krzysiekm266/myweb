@props(['news'=> null ])
@php

    $imgPath = $news->img_path ?? ' ';

    $title = $news->title ?? ' default title';
    $body = $news->body ??  'default body';
    $author = $news->user->name ?? 'default author ';
    $created_at = $news->created_at ?? ' --';
      // $id = $news->user_id ?? ' default id';





@endphp
<div class="flex flex-col m-2 w-full ">
    <div  class="flex self-start  mt-2 ml-2  text-left  h-auto">
        <h1 class=" inline-flex text-xl  px-2   border-b border-gray-400">
            {{ $title }}
        </h1>
    </div>

    <div class=" flex flex-col  m-2 mb-0 w-max-content   ">

        <p class="p-2 align-bottom">
            <img class="block rounded-md w-60 h-40 bg-main float-left  " src="{{ asset($imgPath)}}" />
            {{  $body }}
        </p>
    </div>

    <div  class="flex self-start  m-2 mt-0 pt-3  text-left  h-auto border-t border-gray-400">
        <p class=" inline-flex text-xs  px-2  rounded-md">
            {{ __('Author: '.$author) }}
        </p>
        <p class=" inline-flex text-xs  px-2  rounded-md">
            {{ __('Created: '.$created_at) }}
        </p>
    </div>
    @can('delete', $news)
        <form action="{{ route('news.delete',[$news]) }}" method="POST" class="flex flex-col">
            @csrf
            @method('DELETE')
            <x-button class="w-3/4 mx-auto ">
                {{ __('Delete') }}
            </x-button>

        </form>

    @endcan

     <hr class="w-max-content m-2 mb-1 border-gray-400">
     <hr class="w-max-content mx-2 my-0 border-gray-400">


</div>
