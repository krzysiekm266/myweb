
@php
    $title = $attributes->get('title');
@endphp

<div class="flex flex-col">

    <!-- Very little is needed to make a happy life. - Marcus Antoninus -->

    <div class="flex flex-row items-center">
        <x-label    id="img-title"
                    for="add-image"
                    class="flex items-center  justify-between m-1   w-full h-12
                    px-4 pr-0 py-0 bg-gray-800 border border-none rounded-md  font-semibold text-xs text-white
                    uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none
                 focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
            {{ $title }}
            <span id="img-path" class="ml-10 py-2">  {{ $getImagePath() }} </span>

            <img id="img-preview" src="" alt="" class=" m-0  p-0 w-12 h-12  block rounded-r-md
                   border-none items-center outline-none shadow-none bg-transparent ">
        </x-label>

    </div>

    <x-input type="file" id="add-image" name="add_image"  class="m-1  h-full w-max-content  hidden " />



</div>
