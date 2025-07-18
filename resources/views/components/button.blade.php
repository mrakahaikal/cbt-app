@props(['type' => 'button', 'variant' => 'primary'])

<button {{ $attributes->merge([
    "class" => "h-[52px] p-[14px_30px] bg-$variant rounded-full font-bold text-white transition-all duration-300 hover:shadow-[0_4px_15px_0_#6436F14D] text-center",
    "type" => $type
]) }}>{{$slot}}
</button>