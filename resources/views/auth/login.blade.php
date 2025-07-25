<x-guest-layout>
    <x-slot:title>
        Login
    </x-slot:title>
    <div class="left-side min-h-screen flex flex-col w-full pb-[30px] pt-[82px]">
        <div class="h-full w-full flex items-center justify-center">
            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />


            <form class="flex flex-col gap-[30px]  shrink-0" method="POST" action="{{ route('login') }}">
                @csrf
                <h1 class="font-bold text-2xl leading-9">Sign In</h1>
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

                <!-- Remember Me -->
                <div class="flex justify-between mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox"
                            class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                            name="remember">
                        <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>

                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                            href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
                </div>
                <x-button type="submit">
                    Sign In to my Account
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