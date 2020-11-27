@props(['value'])

<div {{ $attributes->merge(['class' => 'card']) }}>
    {{ $slot }}
</div>