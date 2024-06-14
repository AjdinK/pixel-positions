@php
    $classes = 'hover:text-gray-400 transition-colors duration-300';
@endphp
<a {{ $attributes(['class' => $classes]) }}> {{ $slot }}</a>
