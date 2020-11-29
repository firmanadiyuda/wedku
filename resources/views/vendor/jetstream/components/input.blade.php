@props(['required' => false, 'autofocus' => false, 'disabled' => false])

<input {{ $autofocus ? 'autofocus' : '' }} {{ $disabled ? 'disabled' : '' }} {{ $required ? 'required' : '' }} {{ $attributes->merge(['class' => '']) }} style="z-index: 1" placeholder=" " />