<x-panel class="flex flex-col text-center">
    <div class="self-start text-sm">Laracasts</div>
    <div class="py-8">
        <h3 class="group-hover:text-blue-800 text-xl font-bold transition-colors duration-300">Video Producer</h3>{{-- if we hover over the parent div then this h3 will also consider it as it has been hovered--}}
        <p class="text-xs mt-4">Full Time - From $60,000</p>
    </div>
    <div class="flex justify-between items-center mt-auto">
        <div>
            <x-tag size="small">Backend</x-tag>
            <x-tag size="small">Frontend</x-tag>
            <x-tag size="small">Manager</x-tag>
        </div>

        <x-employer-logo :width="42"/>
    </div>
</x-panel>