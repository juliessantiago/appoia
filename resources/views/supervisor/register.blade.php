<x-guest-layout>
    <form method="POST" action="{{ route('registerSupervisor') }}">
        <div class="flex justify-center">
            <img class="" src="{{ asset('images/stickers/login_aluno.png')}}"/> 
            
        </div> 
        <h3 class="text-center text-2xl font-bold mb-4 text-pink-300">Crie sua conta como supervisor</h3>

        @csrf

        <!-- Nome -->
        <div>
            <x-input-label for="name" :value="__('Nome')" />
            <x-text-input id="name" class="block mt-1 w-full text-purple-400" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!--CRP--> 
        <div>
            <x-input-label for="crp" :value="__('CRP')" />
            <x-text-input id="crp" class="block mt-1 w-full text-purple-400" type="text" name="crp" :value="old('crp')" required autofocus autocomplete="crp" />
            <x-input-error :messages="$errors->get('crp')" class="mt-2" />
        </div>

        <!--Universidade-->
        <div>
            <x-input-label for="universidade_id" :value="__('Universidade ')"  />
            <livewire:universidade-select />
        </div>

        <!-- Emaill -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full text-purple-400" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Senha -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Senha')" />

            <x-text-input id="password" class="block mt-1 w-full text-purple-400"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirmação de senha-->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirmar senha')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full text-purple-400"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-around mt-4">
            <div class="flex justify-center">
                <a href="/" class="text-md hover:text-pink-500">
                    <img  src="{{ asset('images/icons/home.png')}}"/>
                </a>
            </div>
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('multilogin') }}">
                {{ __('Já tenho uma conta!') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Criar') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
