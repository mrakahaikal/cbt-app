<div id="sidebar"
    class="w-[270px] flex flex-col shrink-0 min-h-screen justify-between p-[30px] border-r border-[#EEEEEE] bg-[#FBFBFB]">
    <div class="w-full flex flex-col gap-[30px]">
        <a href="/" wire:navigate class="flex items-center justify-start font-bold text-2xl">
            <x-application-logo class="max-h-10 me-2" />
            CBT APP
        </a>
        <ul class="flex flex-col gap-3">
            <li>
                <h3 class="font-bold text-xs text-[#A5ABB2]">DAILY USE</h3>
            </li>

            <x-sidebar-link href="#" icon="solar-home-bold-duotone" routeName="dashboard.courses*">
                Overview
            </x-sidebar-link>
            <x-sidebar-link href="#" icon="solar-book-bookmark-bold-duotone" routeName="dashboard.courses.index">
                Courses
            </x-sidebar-link>
            <x-sidebar-link href="#" icon="solar-users-group-two-rounded-bold-duotone" routeName="#">
                Students
            </x-sidebar-link>
            <x-sidebar-link href="#" icon="solar-chat-line-bold-duotone" routeName="#" badge="12">
                Messages
            </x-sidebar-link>
            <x-sidebar-link href="#" icon="solar-chart-2-bold-duotone" routeName="#">
                Analytics
            </x-sidebar-link>
        </ul>
        <ul class="flex flex-col gap-3">
            <li>
                <h3 class="font-bold text-xs text-[#A5ABB2]">OTHERS</h3>
            </li>
            <x-sidebar-link href="#" icon="solar-cup-star-bold-duotone" routeName="#">
                Rewards
            </x-sidebar-link>
            <x-sidebar-link href="#" icon="solar-programming-bold-duotone" routeName="#">
                AI Plugins
            </x-sidebar-link>
            <x-sidebar-link href="#" icon="solar-settings-bold-duotone" routeName="#">
                Settings
            </x-sidebar-link>
            <x-sidebar-link href="#" icon="solar-logout-3-bold-duotone" routeName="#">
                Logout
            </x-sidebar-link>
        </ul>
    </div>
    <a href="">
        <div class="w-full flex gap-3 items-center p-4 rounded-[14px] bg-[#0A090B] mt-[30px]">
            <div class="p-4 bg-gray-50 rounded-full">
                @svg("solar-crown-bold-duotone", "size-7 text-primary/50")
            </div>
            <div class="flex flex-col gap-[2px]">
                <p class="font-semibold text-white">Get Pro</p>
                <p class="text-sm leading-[21px] text-[#A0A0A0]">Unlock features</p>
            </div>
        </div>
    </a>
</div>
