
@php


@endphp
<div>
    <h1>
        {{ $project?->name ?? ' default project title'}}
    </h1>
    <p>
       {{ $project?->description ?? ' default description'}}
    </p>
    <div class="flex flex-col">
        <a href="{{ $project?->link ?? ' #'}}">Github</a>

    </div>
</div>
