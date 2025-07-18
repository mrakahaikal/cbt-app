<x-guest-layout>
    <x-slot:title>
        Register
    </x-slot:title>
    <div class="left-side min-h-screen flex flex-col w-full pb-[30px] pt-[82px]">
        <div class="h-full w-full flex items-center justify-center">
            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />


            <form class="flex flex-col gap-[30px]  shrink-0" method="POST" action="{{ route('register') }}">
                @csrf
                <h1 class="font-bold text-2xl leading-9">Sign Up</h1>
                <div class="flex flex-col gap-2">
                    <label class="font-semibold" for="name">Name</label>
                    <x-input-text id="name" type="name" name="name" :value="old('name')" required autofocus
                        autocomplete="name" placeholder="John Doe" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>
                <div class="flex flex-col gap-2">
                    <label class="font-semibold" for="email">Email Address</label>
                    <x-input-text id="email" type="email" name="email" :value="old('email')" required autofocus
                        autocomplete="username" placeholder="name@example.com" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
                <div class="flex flex-col gap-2">
                    <label class="font-semibold" for="password">Password</label>
                    <x-input-text id="password" type="password" name="password" required autocomplete="current-password"
                        placeholder="Enter your password" />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>
                <div class="flex flex-col gap-2">
                    <label class="font-semibold" for="password_confirmation">Password Confirmation</label>
                    <x-input-text id="password_confirmation" type="password" name="password_confirmation" required
                        autocomplete="new-password" placeholder="Confirm your password" />

                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>


                <x-button>
                    Sign Up
                </x-button>
            </form>
        </div>
    </div>
    <div class="right-side min-h-screen flex flex-col w-[650px] shrink-0 pb-[30px] pt-[82px] bg-[#6436F1]">
        <div class="h-full w-full flex flex-col items-center justify-center pt-[66px] gap-[100px]">
            <div class="w-[500px] h-[360px] flex shrink-0 overflow-hidden">
                <img src="{{ asset('images/thumbnail/sign-in-illustration.png') }}" class="w-full h-full object-contain"
                    alt="banner">
            </div>
            <div class="logos w-full overflow-hidden">
                <div class="group/slider flex flex-nowrap w-max items-center">
                    <div
                        class="logo-container animate-[slide_15s_linear_infinite] group-hover/slider:pause-animate flex gap-10 pl-10 items-center flex-nowrap">
                        <div class="w-fit flex shrink-0">
                            <img src="{{ asset('images/logo/logo-51.svg') }}" alt="logo">
                        </div>
                        <div class="w-fit flex shrink-0">
                            <img src="{{ asset('images/logo/logo-51-1.svg') }}" alt="logo">
                        </div>
                        <div class="w-fit flex shrink-0">
                            <img src="{{ asset('images/logo/logo-52.svg') }}" alt="logo">
                        </div>
                        <div class="w-fit flex shrink-0">
                            <img src="{{ asset('images/logo/logo-52-1.svg') }}" alt="logo">
                        </div>
                        <div class="w-fit flex shrink-0">
                            <img src="{{ asset('images/logo/logo-51.svg') }}" alt="logo">
                        </div>
                    </div>
                    <div
                        class="logo-container animate-[slide_15s_linear_infinite] group-hover/slider:pause-animate flex gap-10 pl-10 items-center flex-nowrap">
                        <div class="w-fit flex shrink-0">
                            <img src="{{ asset('images/logo/logo-51.svg') }}" alt="logo">
                        </div>
                        <div class="w-fit flex shrink-0">
                            <img src="{{ asset('images/logo/logo-51-1.svg') }}" alt="logo">
                        </div>
                        <div class="w-fit flex shrink-0">
                            <img src="{{ asset('images/logo/logo-52.svg') }}" alt="logo">
                        </div>
                        <div class="w-fit flex shrink-0">
                            <img src="{{ asset('images/logo/logo-52-1.svg') }}" alt="logo">
                        </div>
                        <div class="w-fit flex shrink-0">
                            <img src="{{ asset('images/logo/logo-51.svg') }}" alt="logo">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
