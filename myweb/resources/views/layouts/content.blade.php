@props(['atr'=>' '])
<div {{ $attributes->merge(['class'=>'bg-white h-auto  w-full  mx-auto sm:rounded-md '.$atr ]) }}>
{{ $slot }}
</div>
