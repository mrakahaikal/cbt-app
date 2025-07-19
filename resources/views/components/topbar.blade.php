<div class="sticky top-0 z-10 bg-surface nav flex gap-2 items-center justify-between p-5 border-b border-[#EEEEEE]">
    <!-- sidebar toggle button for small screens  -->
    <button type="button"
        class="md:hidden size-[46px] flex shrink-0 items-center justify-center rounded-full border border-[#EEEEEE]"
        x-on:click="sidebarIsOpen = true">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="size-5"
            aria-hidden="true">
            <path
                d="M0 3a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm5-1v12h9a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1zM4 2H2a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h2z" />
        </svg>
        <span class="sr-only">sidebar toggle</span>
    </button>
    <form class="search flex items-center w-[400px] h-[52px] p-[10px_16px] rounded-full border border-[#EEEEEE]">
        <input type="search"
            class="font-semibold placeholder:text-[#7F8190] placeholder:font-normal w-full outline-none"
            placeholder="Search by report, student, etc" name="search" />
        <button type="submit"
            class="ml-[10px] rounded-full w-8 h-8 p-2 cursor-pointer bg-primary hover:bg-primary/50 text-white inline-flex items-center justify-center">
            @svg('solar-magnifer-outline', 'size-5')
        </button>
    </form>
    <div class="flex items-center gap-4 md:gap-[30px]">
        <div class="flex gap-[14px]">
            <x-dropdown width="w-72" containerClass="bg-surface-alt" contentClasses="px-2 py-4">
                <x-slot:trigger>
                    <button
                        class="relative size-8 md:size-[46px] flex shrink-0 items-center justify-center rounded-full border border-[#EEEEEE] hover:bg-secondary/5">
                        @svg('solar-bell-bing-outline', 'size-6')
                        <div
                            class="absolute inline-flex items-center justify-center w-6 h-6 text-xs font-bold text-white bg-accent border-2 border-white rounded-full -top-2 -end-2">
                            8
                        </div>
                    </button>
                </x-slot:trigger>
                <x-slot:content>
                    <p>There's No Notification Available</p>
                </x-slot:content>
            </x-dropdown>

        </div>
        <div class="h-[46px] w-[1px] flex shrink-0 border border-[#EEEEEE]"></div>
        <div>
            <x-dropdown align="right" triggerWrapperClass="flex gap-3 items-center rounded-xl hover:bg-secondary/5 p-2">
                <x-slot:trigger>
                    <div class="md:flex flex-col text-right hidden">
                        <span class="text-sm text-[#7F8190]">Howdy</span>
                        <span class="font-semibold">{{ Auth::user()->name }}</span>
                    </div>
                    <button class="size-8 md:size-[46px]">
                        @if(!Auth::user()->avatar_url)
                            @svg('solar-user-circle-bold', 'text-primary/50')
                        @else
                            <img :src="Auth::user()->avatar_url" :alt="Auth::user()->name" />
                        @endif
                    </button>
                </x-slot:trigger>
                <x-slot:content>
                    <x-dropdown-link :href="route('profile.edit')">
                        {{ __('Profile') }}
                    </x-dropdown-link>

                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-dropdown-link>
                    </form>
                </x-slot:content>
            </x-dropdown>

        </div>
    </div>
</div>