<x-guest-layout>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <form method="POST" action="#">
        <div class="flex justify-center">
            <img class="" src="{{ asset('images/stickers/login_aluno.png')}}"/> 
            
        </div> 
        <h3 class="text-center text-2xl font-bold mb-4 text-pink-300">Crie sua conta como voluntário</h3>
        @csrf

        <div class="justify-center mb-4">
            <p class="text-gray-400 text-sm">* campo obrigatório</p>
            {{-- <p class="text-gray-400 text-sm">Se você é menor de idade, precisa informar o nome de seu responsável</p> --}}
        </div>

        <!-- Nome -->
        <div>
            <x-input-label for="name" :value="__('Nome*')" />
            <x-text-input id="name" class="block mt-1 w-full text-purple-400 " type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>
        
        <!-- Supervisor -->
        <div>
            <x-input-label for="supervisor_id" :value="__('Supervisor *')"  />
            <livewire:supervisor-select />
            <x-input-error :messages="$errors->get('supervisor_id')" class="mt-2" />

        </div>

        <!--Assuntos----> 
        <div class="my-4">
            <x-input-label for="assuntos" :value="__('Assuntos*')"  />
            {{-- <p class="text-sm text-purple-500">Assuntos que você gostaria de abordar: </p> --}}
            {{-- <p class="text-sm text-purple-500">Selecione pelo menos um assunto</p> --}}
            <livewire:get-assuntos />
            <x-input-error :messages="$errors->get('assuntos')" class="mt-2" />

        </div>

        <!--telefone--> 
        <div>
            <x-input-label for="telefone" :value="__('Telefone')" />
            <x-text-input id="telefone" class="block mt-1 w-full text-purple-400 " type="text" name="telefone" :value="old('telefone')" required autofocus autocomplete="telefone" />
            <x-input-error :messages="$errors->get('telefone')" class="mt-2" />
        </div>

          <!--matricula-->
          <div>
            <x-input-label for="matricula" :value="__('Matrícula*')" />
            <x-text-input id="matricula" class="block mt-1 w-full text-purple-400 " type="text" name="matricula" :value="old('matricula')" required autofocus autocomplete="matricula" />
            <x-input-error :messages="$errors->get('matricula')" class="mt-2" />
        </div>


        <!-- Emaill -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email*')" />
            <x-text-input id="email" class="block mt-1 w-full text-purple-400 " name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Senha -->
        <div class="mt-4">
            <p class="text-sm text-gray-400">A senha precisa ter no mínimo 8 caracteres</p>
            <x-input-label for="password" :value="__('Senha*')" />

            <x-text-input id="password" class="block mt-1 w-full text-purple-400 "
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirmação de senha-->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirmar senha')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full text-purple-400 "
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
    <script>
         document.addEventListener('notificaNovaConta', () => {
            

         });
    </script>
</x-guest-layout>
