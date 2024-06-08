@props(['tag' => '', 'size' => 'base'])

@php

    $classes = 'bg-white/10 hover:bg-white/25 rounded-xl font-bold transition-colors duration-300';

    if ($size === 'base') {
        $classes .= ' px-5 py-1 text-sm mr-1';
    }
    if ($size === 'small') {
        $classes .= ' px-2 py-1 text-2xs mr-1';
    }

@endphp

<a class="{{ $classes }}" href="/tags/{{ strtolower($tag->name ?? '') }}">
    {{ $tag->name ?? '' }}
</a>
