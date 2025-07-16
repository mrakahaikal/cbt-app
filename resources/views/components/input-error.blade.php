@props([
    'messages' => [],
    'type' => 'error', // error, warning, success, info
    'icon' => null,
    'class' => '',
])

@php
    $typeClasses = [
        'error' => 'text-red-600 bg-red-50 border border-red-200',
        'warning' => 'text-yellow-700 bg-yellow-50 border border-yellow-200',
        'success' => 'text-green-700 bg-green-50 border border-green-200',
        'info' => 'text-blue-700 bg-blue-50 border border-blue-200',
    ];
    $defaultIcons = [
        'error' => '❌',
        'warning' => '⚠️',
        'success' => '✅',
        'info' => 'ℹ️',
    ];
    $iconToShow = $icon ?? $defaultIcons[$type];
@endphp

@if ($messages)
    <ul {{ $attributes->merge([
        'class' => "text-sm space-y-1 p-2 rounded {$typeClasses[$type]} {$class}"
    ]) }}>
        @foreach ((array) $messages as $message)
            <li class="flex items-center gap-2">
                <span>{{ $iconToShow }}</span>
                <span>{{ $message }}</span>
            </li>
        @endforeach
    </ul>
@endif
