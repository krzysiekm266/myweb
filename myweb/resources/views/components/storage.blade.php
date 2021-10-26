@props(['newsStorage'=>' ','imgFiles'=>' '])
@php
    $images = $imgFiles ?: null ;
@endphp

<div class="flex flex-wrap p-1 mb-4">

    @isset($images)
        @foreach ($images as $img)

        <div class="mx-1 ">
            <img src="{{asset($img) }}" alt="" class="w-28 h-28 m-1" />
            @if (!$newsStorage)


            <form action="{{ route('storage.delete') }}" method="POST" class="flex flex-col">
                @csrf
                <input type="text" name="img_path" value="{{ $img }}" hidden>
                <x-button class="w-3/4 mx-auto ">
                    {{ __('Delete') }}
                </x-button>

            </form>
            @endif

            @if ($newsStorage)

            <form action="{{ route('news.create') }}" method="POST" class="flex flex-col">
                @csrf
                <input type="text" name="img_path" value="{{ $img }}" hidden>
                <x-button class="w-3/4 mx-auto ">
                    {{ __('Select') }}
                </x-button>

            </form>
            @endif
        </div>

        @endforeach
    @endisset

</div>

