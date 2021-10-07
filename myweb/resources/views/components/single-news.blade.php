@props(['imgPath'])
<div class="flex flex-col border-2 border-black m-2 w-full ">
    <div  class="flex flex-row  text-center justify-center h-4">
        <h4>
            {{ $title }}
        </h4>
    </div>

    <div class=" flex flex-col  border-2 border-black m-2 w-max-content ">

        <p class="p-2  justify-items-end  ">
            <img class=" rounded-md w-60 h-40 bg-main float-left m-2" src="{{ $imgPath }}" />
            {{ $body }}
        </p>
    </div>


</div>
