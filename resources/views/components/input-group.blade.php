@props(['id', 'type', 'placeholder', 'required' => false, 'autofocus' => false, 'disabled' => false])

<div class="form-group label-floating">
    <x-jet-input id="{{ $id }}" type="{{ $type }}" name="{{ $id }}" required="{{ $required }}" autofocus="{{ $autofocus }}" disabled="{{ $disabled }}" :value="old('{{ $id }}')" />
    <x-jet-label for="{{ $id }}" value="{{ $placeholder }}" />
</div>