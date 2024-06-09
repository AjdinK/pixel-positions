@php
    $classes = "bg-blue-800 rounded py-2 font-bold";
@endphp


<button {{ $attributes(['class'=> $classes]) }}>
    {{ $slot }}
</button>
