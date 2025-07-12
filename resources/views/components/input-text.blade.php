@props([
    'type' => 'text',
    'icon' => 'solar-notebook-outline',
    'containerClass' => '',
    'inputClass' => '',
    'iconClass' => '',
])

<div
    class="flex items-center w-[500px] h-[52px] p-[14px_16px] rounded-full border border-[#EEEEEE] transition-all duration-300 focus-within:border-2 focus-within:border-[#0A090B] {{ $containerClass }}">
    @if($icon)
        <div class="mr-3.5 w-6 h-6 flex items-center justify-center overflow-hidden {{ $iconClass }}">
            @svg($icon)
        </div>
    @endif
    <input {{ $attributes->merge([
        'type' => $type,
        'class' => "font-semibold placeholder:text-[#7F8190] placeholder:font-normal w-full outline-none $inputClass"
    ]) }}>
</div>
