<div class="p-6 text-gray-900 dark:text-gray-100">
    <form method="POST" action="{{ route('register.store') }}">
        @csrf

        <!-- Name -->
        <div class="grid md:grid-cols-2 md:gap-6">
            <div class="relative z-0 w-full mb-5 group">
                <x-input-label for="name" :value="__('Nome do usuario')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                    :value="old('name')" required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                    :value="old('email')" required autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
        </div>

        <div class="grid md:grid-cols-2 md:gap-6">
            <div class="relative z-0 w-full mb-5 group">
                <x-input-label for="password" :value="__('Senha')" />

                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password"
                    required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <x-input-label for="password_confirmation" :value="__('Confirme a senha')" />

                <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                    name="password_confirmation" required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>
        </div>
        @if (user()->is_admin)
        <fieldset class="mt-4">
            <div class="flex items-center mb-4">
                <input id="country-option-1" type="checkbox" name="is_admin" id="is_admin" value="1"
                    class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600">
                <label for="country-option-1"
                    class="block ms-2  text-sm font-medium text-gray-900 dark:text-gray-300">
                    Administrador
                </label>
            </div>
        </fieldset>
        @endif
        

        @if (user()->is_master)
        <fieldset class="mt-4">
            <div class="flex items-center mb-4">
                <input id="country-option-1" type="checkbox" name="is_master" id="is_master" value="1"
                    class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600">
                <label for="country-option-1"
                    class="block ms-2  text-sm font-medium text-gray-900 dark:text-gray-300">
                    Usuario Master
                </label>
            </div>
        </fieldset>
        @endif
        

        <div class="flex items-center justify-end mt-4">


            <x-primary-button class="ms-4">
                {{ __('Registrar') }}
            </x-primary-button>
        </div>
    </form>
</div>