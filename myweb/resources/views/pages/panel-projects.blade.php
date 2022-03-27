@php
    $pTitle="Projects Editor";
@endphp
<x-app-layout  >
    <x-slot name="pageTitle">
        {{ $pTitle }}
    </x-slot>

    <x-slot name="header">
        <div class="hidden sm:flex sm:flex-col sm:items-center  w-full">
            <h2 class="flex  sm:items-center font-semibold text-xl text-gray-500 leading-tight ">
                {{  $pTitle }}
            </h2>
        </div>
    </x-slot>

    {{-- default slot/page content --}}
    <div class=" md:w-3/4 lg:w-1/2 mx-auto p-2">
        <div class="p-4  mb-2 mx-2 bg-white border-b border-gray-200 w-max-content text-center rounded-md ">
            You're logged in!
            Welcome to Project Editor.
        </div>

        <div class="max-w-7xl mx-auto px-2  ">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-md">
                <x-auth-validation-errors class="my-4 w-max-content sm:w-1/2 sm:mx-4" :errors="$errors"/>
                <form action="{{ route('project.store') }}" method="POST" class=" p-6 flex flex-col">
                    @csrf
                    <div class="w-max-content border-t border-gray-200 flex flex-col ">

                        <x-label for="title" class="w-max-content " >
                            {{ __('Project name:') }}
                        </x-label>
                        <x-input class=" w-max-content" type="text" name="name" id="name" placeholder="project name..." value="{{ old('name')  }}" />

                        <x-label for="body" class="w-max-content">
                            {{ __('Project description:') }}
                        </x-label>
                        <textarea class=" w-max-content h-60"  name="description" id="description"  >
                            {{ old('description') }}
                        </textarea>

                        <x-label for="title" class="w-max-content " >
                            {{ __('GitHub link:') }}
                        </x-label>
                        <x-input class=" w-max-content" type="text" name="link" id="link" placeholder="paste/write url here..." value="{{ old('link')  }}" />

                        <x-input class="hidden w-max-content" type="number" name="user_id" id="user-id" value="{{ Auth::user()->id  }}" />

                        <x-button class=" w-3/4 mx-auto my-2 h-12">
                            {{ __('Create Project') }}
                        </x-button>


                    </div>

                </form>


                {{-- <x-storage :imgFiles="$images" :newsStorage=true /> --}}



            </div>
        </div>
    </div>

    <x-slot name="footer">
        {{-- <x-footer /> --}}
     </x-slot>
</x-app-layout>


