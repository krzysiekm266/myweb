@props(['atr'=>' '])
<div {{ $attributes->merge(['class'=>'flex flex-col  items-center bg-white h-auto  w-full  mx-auto sm:rounded-md '.$atr ]) }}>
{{ $slot }}
</div>
