@props(['project'=>null])
@php


@endphp
<div class="h-auto p-2 m-2 w-max-content border border-black">
    <h1 class="h-auto mb-4">
        {{ $project?->name ?? ' default project title'}}
    </h1>
    <p class="h-auto mb-2">
       {{ $project?->description ?? ' default description'}}
    </p>
    <div class="flex flex-col h-auto">
        <a href="{{ $project?->link ?? ' #'}}" class="flex flex-row items-center justify-start text-sm font-semibold" target="_blank">
            <img src="{{ asset('storage/images/GitHub-Mark-32px.png') }}" alt="" class=" rounded-full w-6 h-6">
            {{ $project?->name ?? ' default project title '}} on GitHub
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
