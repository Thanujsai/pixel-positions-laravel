@php
    $classes="p-4 bg-white/5 rounded-xl flex text-center gap-x-6 border border-transparent hover:border-blue-800 group transition-colors duration-300"
@endphp


<div {{ $attributes(["class" => $classes]) }}>
    {{ $slot }}
</div>

{{--the attributes thing is like attributes merge, it merges the css classes passed to this component with the already existing css classes --}}