
@php
    $images = $imgFiles ?: null ;
@endphp

<div class="flex flex-wrap p-1">

    @isset($images)
        @foreach ($images as $img)
            <img src="{{asset($img) }}" alt="altpath" class="w-28 h-28 m-1" />
        @endforeach
    @endisset

</div>

