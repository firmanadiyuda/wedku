@props(['value'])

{{-- <label {{ $attributes->merge(['class' => 'block font-medium text-sm text-gray-700']) }}>
    {{ $value ?? $slot }}
</label> --}}

<label {{ $attributes->merge(['class' => 'cursor-text select-none form-label']) }}>
    {{ $value ?? $slot }}
</label>