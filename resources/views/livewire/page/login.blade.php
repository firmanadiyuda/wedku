<div>

    {{-- <x-app-layout navbar="off" footer="off"> --}}
        <x-jet-authentication-card>
            <x-slot name="logo">
                <x-jet-authentication-card-logo />
            </x-slot>
    
            <x-jet-validation-errors class="mb-4" />
    
            @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
            {{session('status')}}
            @endif
    
            <form method="POST" action="{{ route('login-check') }}">
                @csrf
    
                <x-input-group id="email" type="email" placeholder="Email" required autofocus />
                <x-input-group id="password" type="password" placeholder="Password" required autocomplete="current-password" />
    
                <div class="">
                    <div lass="flex items-center">
                        <div>
                            <input id="remember_me" type="checkbox" class="wedku-checkbox" name="remember">
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
    
                    <x-btn-submit theme="primary" class="ml-4">
                        {{ __('Login') }}
                    </x-btn-submit>
                </div>
            </form>
    
        </x-jet-authentication-card>
    
    {{-- </x-app-layout>     --}}

</div>
