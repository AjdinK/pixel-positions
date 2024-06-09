@php
    $classes = "text-4xl font-bold text-center mb-8";
@endphp
<h1 {{ $attributes (['class' => $classes]) }}> {{ $slot }}</h1>
