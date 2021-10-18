
@php
    $title = $attributes->get('title');
    $selectedTitle = $attributes->get('selectedTitle');
    $imagePath = $attributes->get('imagePath');
@endphp

<div class="flex flex-col">

    <!-- Very little is needed to make a happy life. - Marcus Antoninus -->

    <div class="flex flex-row items-center">
        <x-label for="img-input" class="flex items-center  justify-between m-1   w-full h-12
                    px-4 pr-0 py-0 bg-gray-800 border border-none rounded-md  font-semibold text-xs text-white
                    uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none
                  focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">

            <span id="img-title" class="mx-auto py-2">  {{   $title  }} </span>

            <span id="img-path" class="mx-auto py-2">  {{ $imagePath }} </span>

            <img id="img-preview" src="" alt="" class=" m-0  p-0 w-12 h-full  block rounded-r-md
                        border-none items-center  shadow-none bg-transparent ">
        </x-label>

    </div>
    {{-- hidden elements --}}
    <label id="img-title-selected" class="hidden">{{ $selectedTitle }}</label>
    <x-input type="file" id="img-input" name="img_input"  class="m-1    hidden " />
    <x-input type="text" id="img-filename" name="img_filename"  class="m-1 hidden" />

</div>
