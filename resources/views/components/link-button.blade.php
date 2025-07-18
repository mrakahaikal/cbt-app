<a {{ $attributes->merge([
    "class" => "h-13 py-3.5 px-5 bg-primary rounded-full font-semibold text-white transition-all duration-300 hover:shadow-[0_4px_15px_0_#6436F14D]"
]) }} wire:navigate>{{$slot}}</a>
