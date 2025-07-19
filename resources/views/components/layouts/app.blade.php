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
    <section id="content" x-data="{ sidebarIsOpen: false }" class="relative flex w-full flex-col md:flex-row">
        <!-- This allows screen readers to skip the sidebar and go directly to the main content. -->
        <a class="sr-only" href="#main-content">skip to the main content</a>
        <!-- dark overlay for when the sidebar is open on smaller screens  -->
        <div x-cloak x-show="sidebarIsOpen" class="fixed inset-0 z-20 bg-surface-dark/10 backdrop-blur-xs md:hidden"
            aria-hidden="true" x-on:click="sidebarIsOpen = false" x-transition.opacity></div>
        <x-sidebar />
        <div id="menu-content" class="h-svh w-full overflow-y-auto">
            <x-topbar />
            <main id="main-content">
                @isset($breadcrumbs)
                    {{ Diglactic\Breadcrumbs\Breadcrumbs::render($breadcrumbs) }}
                @endisset
                @isset($fullBreadcrumbs)
                    {{ $fullBreadcrumbs }}
                @endisset
                {{ $slot }}
            </main>
        </div>
    </section>

    @livewireScripts
</body>

</html>