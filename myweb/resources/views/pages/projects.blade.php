@php
    $pTitle="Projects";
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

    <div class="pt-12 pb-2 md:w-3/4 mx-auto p-2">
        <div class="max-w-7xl mx-auto ">
            <div class="bg-gray-100 ">
                <x-auth-validation-errors class="m-4" :errors="$errors"/>
                <x-content-layout class=" p-2">

                    @isset($allProjects)
                      @foreach ($allProjects as $project)

                        <x-single-project :project="$project" />

                      @endforeach
                    @endisset

                </x-content-layout>
            </div>
        </div>
    </div>

    <x-slot name="footer">
       <x-footer />
    </x-slot>
</x-app-layout>
