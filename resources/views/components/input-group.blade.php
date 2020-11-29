@props(['id', 'type', 'placeholder', 'required' => false, 'autofocus' => false, 'disabled' => false])

<div class="form-group @error($id) input-error @enderror label-floating">
    <x-jet-input id="{{ $id }}" type="{{ $type }}" name="{{ $id }}" required="{{ $required }}" autofocus="{{ $autofocus }}" disabled="{{ $disabled }}" wire:model="{{ $id }}" :value="old('{{ $id }}')" />
    <x-jet-label for="{{ $id }}" value="{{ $placeholder }}" />
</div>
@error($id) <div class="-mt-3 text-red-500 animate__animated animate__fadeInDown animate__fast">{{ $message }}</div> @enderror
