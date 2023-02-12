<x-authentication-layout>
    <h1 class="text-3xl text-slate-800 font-bold mb-6">{{ __('Crear tu cuenta') }} ✨</h1>
    <!-- Form -->
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="space-y-4">
            <div>
                <x-jet-label for="name">{{ __('Nombre completo') }} <span class="text-rose-500">*</span></x-jet-label>
                <x-jet-input id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div>
                <x-jet-label for="email">{{ __('Correo electronico') }} <span class="text-rose-500">*</span></x-jet-label>
                <x-jet-input id="email" type="email" name="email" :value="old('email')" required />
            </div>

            <div>
                <x-jet-label for="password" value="{{ __('Clave') }}" />
                <x-jet-input id="password" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div>
                <x-jet-label for="password_confirmation" value="{{ __('Confirmar clave') }}" />
                <x-jet-input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>
        </div>
        <div class=" mt-6">
            <button type="submit" class="rounded w-full p-2 text-indigo-100 bg-indigo-500 hover:bg-indigo-700">
                {{ __('Registrarse') }}
            </button>               
        </div>
               
    </form>
    <x-jet-validation-errors class="mt-4" />  
    <!-- Footer -->
    <div class="pt-5 mt-6 border-t border-slate-200">
        <div class="text-sm">
            {{ __('¿Ya tienes una cuenta?') }} <a class="font-medium text-indigo-500 hover:text-indigo-600" href="{{ route('login') }}">{{ __('Iniciar Sesion') }}</a>
        </div>
    </div>
</x-authentication-layout>
