@props(['job'])
<x-panel class="flex flex-col text-center">
    <div class="self-start text-sm">{{$job->employer->name}}</div>
    <div class="py-8">
        <h3 class="group-hover:text-blue-800 text-xl font-bold transition-colors duration-300">
            <a href="{{ $job->url }}" target="_blank">
                {{ $job->title }}
            </a>
        </h3>{{-- if we hover over the parent div then this h3 will also consider it as it has been hovered--}}
        <p class="text-xs mt-4">Full Time - {{ $job->salary }}</p>
    </div>
    <div class="flex justify-between items-center mt-auto">
        <div>
            @foreach ($job->tags as $tag)
                <x-tag :$tag size="small"/>
            @endforeach
        </div>

        <x-employer-logo :width="42"/>
    </div>
</x-panel>