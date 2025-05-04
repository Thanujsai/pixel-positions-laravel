@props(['size' => 'base'])

@php
    $classes = "bg-white/10 rounded-xl font-bold hover:bg-white/25 transition-colors duration-300";

    Log::info("size");
    Log::info($size);
    if($size==='base'){
        Log::info("in base");
        $classes .= " px-5 py-1 text-sm";// . operator is to concatenate 2 strings
    }

    if($size==='small'){
        Log::info("in small");
        $classes .= " px-3 py-1 text-xs";
    }
@endphp

<a href="#" class="{{ $classes }}">{{ $slot }}</a>