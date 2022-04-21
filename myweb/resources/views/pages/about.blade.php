@php
    $pTitle="About";
@endphp
<x-app-layout >
    <x-slot name="pageTitle">
        {{ $pTitle }}
    </x-slot>

    <x-slot name="header">
        <div class="hidden sm:flex sm:flex-col sm:items-center  sm:w-full">
            <h2 class="flex sm:items-center font-semibold text-xl text-gray-500 leading-tight ">
                {{ $pTitle }}
            </h2>
        </div>
    </x-slot>

    <div class="pt-12 pb-2 md:w-1/2 mx-auto p-2">
        <div class="max-w-7xl mx-auto ">
            <div class="bg-white  rounded-md p-2">
                <x-content-layout class="p-4 bg-gray-100 rounded-md">
                   Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius earum ab nostrum pariatur ratione molestiae voluptatum odit
                   repellat facilis eum, corporis ducimus consequatur soluta, sit enim. Sed ducimus molestias quibusdam?
                   Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus aliquid temporibus at consectetur dignissimos recusandae explicabo necessitatibus perspiciatis magni totam dolore,
                    repellendus tempora quo eaque assumenda sit unde nisi eius.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus voluptate consectetur qui? Aspernatur explicabo autem eligendi, quam fugit nihil porro eos
                    cumque cupiditate! Commodi beatae fugiat quod perferendis iure ea!

                </x-content-layout>
            </div>
        </div>
    </div>

    <x-slot name="footer">
       <x-footer />
    </x-slot>
</x-app-layout>
