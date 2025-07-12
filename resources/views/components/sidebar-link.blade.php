@props(['icon' => null, 'routeName', 'badge' => null])

@php
    $isActive = Route::currentRouteName() === $routeName || request()->is($routeName);
    $activeClass = $isActive ? 'bg-secondary' : '';
    $textClass = $isActive ? 'text-white' : '';
    $iconClass = $isActive ? 'text-white' : 'text-primary/50 group-hover:text-white';
@endphp

<li>
    <a {{ $attributes->merge([
    'class' => "p-[10px_16px] flex items-center gap-3.5 rounded-full h-11 transition-all justify-between duration-300 group hover:bg-secondary $activeClass"
]) }} wire:navigate>
        <div class="flex items-center gap-3.5">
            @if($icon)
                @svg($icon, "size-6 transition-all duration-300 $iconClass")
            @endif
            <p class="font-semibold transition-all duration-300 group-hover:text-white {{ $textClass }}">
                {{ $slot }}
            </p>
        </div>
        @if($badge)
            <div class="notif w-5 h-5 flex shrink-0 rounded-full items-center justify-center bg-accent">
                <p class="font-bold text-[10px] leading-[15px] text-white">{{ $badge }}</p>
            </div>
        @endif
    </a>
</li>
