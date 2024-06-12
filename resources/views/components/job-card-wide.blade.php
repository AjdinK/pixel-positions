@props(['job'])
<x-panel class="flex gap-x-6">

    <div>
        <x-employer-logo/>
    </div>

    <div class="flex flex-1 flex-col">

        <a class="self-start text-xs text-gray-400" href="#">{{ $job->employer->name }}</a>
        <h3 class="mt-3 text-xl font-bold transition-colors duration-300 group-hover:text-blue-900">
            <a href="{{ $job->url }}" target="_blank">
                {{ $job->title }}
            </a>
        </h3>

        <p class="mt-auto text-sm text-gray-500">{{ $job->schedule }} - {{ $job->salary }} </p>

    </div>
    <div>
        @foreach ($job->tags as $tag)
            <x-tag :$tag/>
        @endforeach
    </div>
</x-panel>
