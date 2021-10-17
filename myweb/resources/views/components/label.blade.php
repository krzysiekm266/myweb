@props(['value'])
@php
    $classes = $attributes->get('class') ?? 'block font-medium text-sm text-gray-700 bg-red-200';
@endphp
<label {{ $attributes->merge(['class' => $classes]) }}>
    {{ $value ?? $slot }}
</label>
