<div class="flex flex-col px-5 mt-5">
    <div class="w-full flex justify-between items-center">
        <div class="flex flex-col gap-1">
            <h1 class="font-extrabold text-[30px] leading-[45px]">{{ $slot ?? $title }}</h1>
            @isset($subtitle)
                <h2 class="text-[#7F8190]">{{ $subtitle }}</h2>
            @endisset
        </div>
        @isset($action)
            {{ $action }}
        @endisset
    </div>
</div>