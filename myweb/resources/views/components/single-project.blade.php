@props(['project'=>null])
@php


@endphp
<div class="flex flex-row items-center bg-gray-100 w-auto ">
    {{-- <img src="{{ asset('storage/images/icon-project.png') }}" alt="" class="  w-20 h-20 absolute top-0 left-2"> --}}

    <div class="h-auto p-2 pl-24 m-2 w-max-content border-b border-black w-full  relative ">

        <img src="{{ asset('storage/images/icon-project.png') }}" alt="" class="  w-20 h-20 absolute top-0 left-0">

        <h1 class="h-auto mb-4 text-xl font-semibold">
            {{Str::ucfirst($project?->name)  ?? ' default project title'}}
        </h1>
        <p class="h-auto mb-8">
        {{ $project?->description ?? ' default description'}}
        </p>
        <div class="flex flex-col h-auto ">
            <a href="{{ $project?->link ?? ' #'}}" class="flex flex-row items-center justify-start text-sm font-semibold" target="_blank">
                <img src="{{ asset('storage/images/GitHub-Mark-32px.png') }}" alt="" class=" rounded-full w-6 h-6">
                {{ Str::ucfirst($project?->name)  ?? ' default project title '}} on GitHub
            </a>

        </div>

        @can('delete', $project)
            <form action="{{ route('project.delete',[$project]) }}" method="POST" class="flex flex-col self-start mx-2">
                @csrf
                @method('DELETE')
                <x-button class="w-3/4 mx-auto ">
                    {{ __('Delete') }}
                </x-button>

            </form>
        @endcan

    </div>
</div>
