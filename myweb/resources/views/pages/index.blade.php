@php
    $pTitle="Welcome";
@endphp
<x-app-layout>
    <x-slot name="pageTitle">
        {{ $pTitle }}
    </x-slot>

    <x-slot name="header">
        <div class="hidden sm:flex sm:flex-col sm:items-center  sm:w-full">
            <h2 class="flex sm:items-center font-semibold text-xl text-gray-800 leading-tight ">
                {{ $pTitle }}
            </h2>
        </div>
    </x-slot>

    <div class=" py-12 md:w-1/2 mx-auto " >
        <div class=" mx-auto">
            <div class="bg-white  shadow-sm mx-auto  rounded-md ">
                <div class=" h-auto w-full mx-auto relative">
                    {{-- circles top left --}}
                    <div class="z-30 w-36 h-36 absolute -top-10 -left-10 rounded-full bg-gray-100 ">
                        <div class="bg-main bg-cover ring-2 ring-white z-40 w-32 h-32 rounded-full bg-white absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                            {{-- <div class="z-50 w-28 h-28 rounded-full bg-green-500 absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                            </div> --}}
                        </div>
                    </div>

                    <div >

                        {{-- position text content agains this element --}}
                        <div class=" w-28 h-28 rounded-full bg-green-500 float-left transform -translate-x-4 -translate-y-4">
                        </div>
                        {{-- text content --}}
                        <div class="m-2 text-sm sm:text-base z-30">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem doloremque iusto, deserunt beatae
                            cupiditate unde nemo fugiat temporibus.  Non sint illum similique eum porro voluptatibus impedit recusandae at deleniti iure.
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quae rem doloremque reprehenderit asperiores! Nulla pariatur totam sequi enim corporis iste corrupti ullam error, fuga porro aspernatur vel! Tempora, aliquam deserunt?
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident repudiandae et cumque hic officia cupiditate dolor porro, mollitia non voluptas odio similique rerum incidunt error accusantium iure totam minima assumenda.
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat, porro voluptatum nihil doloremque maiores sapiente quod dolor quasi illo quidem quam deserunt quibusdam vel assumenda eos corrupti asperiores veniam. Commodi?
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <x-slot name="footer">

     </x-slot>
</x-app-layout>
