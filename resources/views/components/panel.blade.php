@php
    $classes =
        'p-4 bg-white/5 rounded-xl  border group border-transparent hover:border-blue-900 transition-colors duration-300';
@endphp

<div {{ $attributes(['class' => $classes]) }}>
    {{ $slot }}
</div>
