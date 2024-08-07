<x-guest-layout>
    <form method="POST" action="{{ route('registerAluno') }}">
        <div class="flex justify-center">
            <img class="" src="{{ asset('images/stickers/login_aluno.png')}}"/> 
            
        </div> 
        <h3 class="text-center text-2xl font-bold mb-4 text-pink-300">Crie sua conta</h3>
        @csrf

        <div class="justify-center mb-4">
            <p class="text-gray-400 text-sm">* campo obrigatório</p>
            {{-- <p class="text-gray-400 text-sm">Se você é menor de idade, precisa informar o nome de seu responsável</p> --}}
        </div>
        <!-- Nome -->
        <div>
            <x-input-label for="name" :value="__('Nome *')" />
            <x-text-input id="name" class="block mt-1 w-full text-purple-400" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!--Data de nascimento--> 
        <div>
            <x-input-label for="data_nascimento" :value="__('Data de nascimento *')" />
            <x-text-input id="data_nascimento" class="block mt-1 w-full text-purple-400" type="date" name="data_nascimento" :value="old('data_nascimento')" required autofocus autocomplete="Data de nascimento" />
            <x-input-error :messages="$errors->get('data_nascimento')" class="mt-2" />
        </div>

        <!--Responsável--> 
        <div>
            <x-input-label for="responsavel" :value="__('Responsável')" />
            <x-text-input id="responsavel" class="block mt-1 w-full text-purple-400" type="text" name="responsavel" :value="old('responsavel')" autofocus autocomplete="Responsável" />
            <x-input-error :messages="$errors->get('responsavel')" class="mt-2" />
        </div>

        <!--Sexo--> 
        <div>
            <x-input-label for="responsavel" :value="__('Sexo')" />
            <select id="sexo" class="block mt-1 w-full text-purple-400 border-gray-300" name="sexo" :value="old('sexo')">
                <option value="feminino">Feminino</option>
                <option value="masculino">Masculino</option>
            </select>
            <x-input-error :messages="$errors->get('sexo')" class="mt-2" />
        </div>

        <!--Escola-->
        <div>
            <x-input-label for="id_escola" :value="__('Escola ')" />
            <livewire:escola-select />
        </div>

        
        


        <!-- Emaill -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email *')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Senha -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Senha *')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirmação de senha-->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirmar senha')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('multilogin') }}">
                {{ __('Já tenho uma conta!') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Criar') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
