<div>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        {{-- <form wire:submit.prevent="authenticate" method="POST" action="{{ route('login-check') }}"> --}}
        <form wire:submit.prevent="authenticate">

            @csrf

            <x-input-group id="email" type="email" placeholder="Email" autofocus />
            <x-input-group id="password" type="password" placeholder="Password" autocomplete="current-password" />

            <div class="">
                <div lass="flex items-center">
                    <div>
                        <input id="remember_me" type="checkbox" class="wedku-checkbox" name="remember_me" wire:model="remember_me">
                        <label class="ml-2 text-sm text select-none" for="remember_me">Ingat Saya</label>
                    </div>
                </div>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                <a class="underline text-sm text transform hover:-translate-y-1" href="{{ route('password.request') }}">
                    {{ __('Lupa password?') }}
                </a>
                @endif

                <x-btn-submit type="submit" theme="primary" class="ml-4" wire:loading.class="disabled cursor-not-allowed" wire:target="authenticate">
                    <span wire:loading wire:target="authenticate" class="animate-spin mr-3">
                        <i class="ri-loader-4-line"></i>
                    </span>{{ __('Login') }}
                </x-btn-submit>
            </div>
        </form>

    </x-jet-authentication-card>
</div>
