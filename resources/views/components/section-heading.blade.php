
<?php 
    $wrapper = "inline-flex items-center gap-x-2";
?>

<div {{$attributes(['class' => $wrapper])}}>
    <span class="w-2 h-2 bg-white inline-block"></span>
    <h3 class="text-xl font-bold">{{ $slot }}</h3>
</div>
