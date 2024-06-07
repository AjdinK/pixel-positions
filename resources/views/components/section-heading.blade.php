<?php
$wrapper = 'inline-flex items-center gap-x-2';
?>

<div {{ $attributes(['class' => $wrapper]) }}>
    <span class="inline-block h-2 w-2 bg-white"></span>
    <h3 class="text-xl font-bold">{{ $slot }}</h3>
</div>
