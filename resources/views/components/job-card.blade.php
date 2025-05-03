<div class="p-4 bg-white/5 rounded-xl flex flex-col text-center border border-transparent hover:border-blue-800 group transition-colors duration-300">
    <div class="self-start text-sm">Laracasts</div>
    <div class="py-8">
        <h3 class="group-hover:text-blue-800 text-xl font-bold transition-colors duration-300">Video Producer</h3>{{-- if we hover over the parent div then this h3 will also consider it as it has been hovered--}}
        <p class="text-xs mt-4">Full Time - From $60,000</p>
    </div>
    <div class="flex justify-between items-center mt-auto">
        <div>
            <x-tag>Tag</x-tag>
            <x-tag>Tag</x-tag>
            <x-tag>Tag</x-tag>
        </div>

        <x-employer-logo :width="42"/>
    </div>
</div>