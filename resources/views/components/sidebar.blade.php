<div id="sidebar"
    class="w-[270px] flex flex-col shrink-0 min-h-screen justify-between p-[30px] border-r border-[#EEEEEE] bg-[#FBFBFB]">
    <div class="w-full flex flex-col gap-[30px]">
        <a href="index.html" class="flex items-center justify-center">
            <img src="{{ asset('images/logo/logo.svg') }}" alt="logo">
        </a>
        <ul class="flex flex-col gap-3">
            <li>
                <h3 class="font-bold text-xs text-[#A5ABB2]">DAILY USE</h3>
            </li>

            <x-sidebar-link href="#" icon="images/icons/home-hashtag.svg" routeName="dashboard.courses*">
                Overview
            </x-sidebar-link>
            <x-sidebar-link href="#" icon="images/icons/note-favorite.svg" routeName="dashboard.courses.index">
                Courses
            </x-sidebar-link>
            <x-sidebar-link href="#" icon="images/icons/profile-2user.svg" routeName="#">
                Students
            </x-sidebar-link>
            <x-sidebar-link href="#" icon="images/icons/sms-tracking.svg" routeName="#" badge="12">
                Messages
            </x-sidebar-link>
            <x-sidebar-link href="#" icon="images/icons/chart-2.svg" routeName="#">
                Analytics
            </x-sidebar-link>
        </ul>
        <ul class="flex flex-col gap-3">
            <li>
                <h3 class="font-bold text-xs text-[#A5ABB2]">OTHERS</h3>
            </li>
            <li>
                <a href=""
                    class="p-[10px_16px] flex items-center gap-[14px] rounded-full h-11 transition-all duration-300 hover:bg-[#2B82FE]">
                    <div>
                        <img src="{{ asset('images/icons/3dcube.svg') }}" alt="icon">
                    </div>
                    <p class="font-semibold transition-all duration-300 hover:text-white">Rewards</p>
                </a>
            </li>
            <li>
                <a href=""
                    class="p-[10px_16px] flex items-center gap-[14px] rounded-full h-11 transition-all duration-300 hover:bg-[#2B82FE]">
                    <div>
                        <img src="{{ asset('images/icons/code.svg') }}" alt="icon">
                    </div>
                    <p class="font-semibold transition-all duration-300 hover:text-white">A.I Plugins</p>
                </a>
            </li>
            <li>
                <a href=""
                    class="p-[10px_16px] flex items-center gap-[14px] rounded-full h-11 transition-all duration-300 hover:bg-[#2B82FE]">
                    <div>
                        <img src="{{ asset('images/icons/setting-2.svg') }}" alt="icon">
                    </div>
                    <p class="font-semibold transition-all duration-300 hover:text-white">Settings</p>
                </a>
            </li>
            <li>
                <a href="signin.html"
                    class="p-[10px_16px] flex items-center gap-[14px] rounded-full h-11 transition-all duration-300 hover:bg-[#2B82FE]">
                    <div>
                        <img src="{{ asset('images/icons/security-safe.svg') }}" alt="icon">
                    </div>
                    <p class="font-semibold transition-all duration-300 hover:text-white">Logout</p>
                </a>
            </li>
        </ul>
    </div>
    <a href="">
        <div class="w-full flex gap-3 items-center p-4 rounded-[14px] bg-[#0A090B] mt-[30px]">
            <div>
                <img src="{{ asset('images/icons/crown-round-bg.svg') }}" alt="icon">
            </div>
            <div class="flex flex-col gap-[2px]">
                <p class="font-semibold text-white">Get Pro</p>
                <p class="text-sm leading-[21px] text-[#A0A0A0]">Unlock features</p>
            </div>
        </div>
    </a>
</div>
