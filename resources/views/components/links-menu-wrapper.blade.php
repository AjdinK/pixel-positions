@php
    $classes = "space-x-6 font-bold";
@endphp
<div {{ $attributes(['class'=> $classes]) }}>
    {{ $slot }}
</div>