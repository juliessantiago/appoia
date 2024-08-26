<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{route('multiAuth')}}">
             @if(session('mensagem'))
             <div class="flex justify-center">
                <div class="bg-lime-400 m-4 px-6 py-2 rounded-md">
                    <p class="text-center text-gray-100">{{session('mensagem')}}</p> 
                    {{-- <p class="text-center text-gray-100">Conta criada com sucesso</p>  --}}
                </div>
            </div>
             @endif
        <div class="flex justify-center">
            <img class="" src="{{ asset('images/stickers/login_aluno.png')}}"/> 
  
        </div> 
      
        <h3 class="text-center text-3xl font-bold  text-pink-300">Entrar</h3>
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full"  name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Senha')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <x-input-label class="mt-4" for="tipo_usuario" :value="__('Escolha uma opção: ')"/>
        <div class="flex justify-between">
          <div class="m-1">
            <input checked type="radio" id="aluno" name="tipo_usuario" value="aluno" class=" text-purple-400 border-gray-300 checked:bg-purple-500">
            <label for="aluno" class=" text-gray-500" che>Sou paciente</label><br>
          </div>

          <div class="m-1"> 
            <input type="radio" id="voluntario" name="tipo_usuario" value="voluntario" class=" text-purple-400 border-gray-300 checked:bg-purple-500">
            <label for="voluntario" class="text-gray-500">Sou voluntário</label><br>
          </div>
           
          <div class="m-1"> 
            <input type="radio" id="supervisor" name="tipo_usuario" value="supervisor" class=" text-purple-400 border-gray-300 checked:bg-purple-500 focus:outline-none">
            <label for="supervisor" class="text-gray-500">Sou supervisor</label> 
          </div>
          
          
        </div>

        <!-- Remember Me -->
        {{-- <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div> --}}

        <div class="flex items-center justify-around mt-4">
                <div class="flex justify-center">
                    <a href="/" class="text-md hover:text-pink-500">
                        <img  src="{{ asset('images/icons/home.png')}}"/>
                    </a>
                </div>
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('preSignUp') }}">
                    {{ __('Criar nova conta') }}
                </a>

            <x-primary-button class="ms-3" name="signIn">
                {{ __('Entrar') }}
            </x-primary-button>
        </div>
    </form>
    <script>
        window.addEventListener('notificaNovaConta', function () {
            // Lógica do evento
            toastr.error('oi oi oi ');
            
        });
    </script>
    </script>
</x-guest-layout>
