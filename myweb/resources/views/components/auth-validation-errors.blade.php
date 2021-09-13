@props(['errors'])

@if ($errors->any())
    <div {{ $attributes }}>
        @if ($errors->has('sucess'))
            <div class="font-medium text-green-600">
                {{ __('Sucess.') }}
            </div>
            <ul class="mt-3 list-disc list-inside text-sm text-green-600">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @else
        <div class="font-medium text-red-600">
            {{ __('Whoops! Something went wrong.') }}
        </div>
        <ul class="mt-3 list-disc list-inside text-sm text-red-600">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        @endif

    </div>
@endif
