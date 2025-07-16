<a {{ $attributes->merge([
    'class' => 'flex items-center w-full px-4 py-2 text-left justify-between text-sm w-full p-2 rounded-lg hover:bg-gray-50 font-medium focus:outline-none transition-colors duration-200'
]) }}>
    @isset($icon)
        <span class="mr-2">
            {{ $icon }}
        </span>
    @endisset
    {{ $slot }}
</a>