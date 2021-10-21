@props(['imgPath'])
<div class="flex flex-col m-2 w-full ">
    <div  class="flex self-center justify-center mt-2  text-center  h-auto">
        <h1 class=" inline-flex text-xl  px-2  rounded-md">
            {{ $title }}
        </h1>
    </div>

    <div class=" flex flex-col  m-2 w-max-content  border-b border-gray-500 ">

        <p class="p-2 align-bottom">
            <img class="block rounded-md w-60 h-40 bg-main float-left m-2 " src="{{ asset($imgPath)}}" />
            {{ $body }}
        </p>
    </div>


</div>
