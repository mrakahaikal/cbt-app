<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Page Title' }} - {{ config('app.name') }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap"
        rel="stylesheet" />
    @vite('resources/css/app.css')
    @livewireStyles
</head>

<body class="font-poppins text-[#0A090B]">
    <section id="sign-in" class="flex w-full min-h-[832px]">
        <nav class="flex items-center px-[50px] pt-[30px] w-full absolute top-0">
            <a class="flex items-center justify-start font-bold text-2xl" href="/" wire:navigate>
                <x-application-logo class="max-h-10 me-2" />
                CBT APP
            </a>

            <div class="flex items-center justify-end w-full">
                <ul class="flex items-center gap-[30px]">
                    <li>
                        <a href="" class="font-semibold text-white">Docs</a>
                    </li>
                    <li>
                        <a href="" class="font-semibold text-white">About</a>
                    </li>
                    <li>
                        <a href="" class="font-semibold text-white">Help</a>
                    </li>
                    <li class="h-[52px] flex items-center">
                        @auth
                            <x-link-button :href="route('dashboard')">Dashboard</x-link-button>
                        @else
                            @if(Route::currentRouteName() === 'login')
                                <x-link-button :href="route('register')" class="bg-tertiary">
                                    Sign Up
                                </x-link-button>
                            @else
                                <x-link-button :href="route('login')" class="bg-tertiary">
                                    Sign In
                                </x-link-button>
                            @endif
                        @endauth
                    </li>
                </ul>
            </div>
        </nav>
        {{ $slot }}
    </section>

    @livewireScripts
</body>

</html>