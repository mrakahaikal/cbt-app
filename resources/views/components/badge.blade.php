@props(['color' => null])
@php
    $fallbackColor = '#6436f1';
    $finalColor = $color ?? $fallbackColor;
@endphp
<span {{ $attributes->merge([
    "class" => "px-4 py-2 rounded-full font-bold text-sm",
    "style" => "background-color: {$finalColor}30; color: {$finalColor};"
]) }}>{{ $slot }}</span>
