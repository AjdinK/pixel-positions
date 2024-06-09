@php
    $classes = "bg-blue-800 hover:bg-blue-900 rounded py-2 px-6 font-bold";

@endphp

<button
    {{ $attributes(['class' => $classes]) }}>
    {{ $slot }}
</button>