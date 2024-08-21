<x-guest-layout>
    <div class="mb-4">
        <p class="text-center text-xl font-bold text-pink-300 mb-4">Você gostaria de se cadastrar como: </p>

        <div class="flex justify-evenly p-10"> 
                <a href="{{route('registerAlunoForm')}}">
                    <img class="rounded-t-lg mb-4" src="/images/stickers/paciente.png" alt="" />
                    <p class="text-gray-400 text-lg font-bold text-center">Paciente</p>
                </a>

                <a href="{{route('registerVoluntarioForm')}}">
                    <img class="rounded-t-lg mb-4" src="/images/stickers/voluntario.png" alt="" />
                    <p class="text-gray-400 text-lg font-bold text-center">Voluntário </p>
                </a>

                <a href="{{route('registerSupervisorForm')}}">
                    <img class="rounded-t-lg mb-4" src="/images/stickers/supervisor.png" alt="" />
                    <p class="text-gray-400 text-lg font-bold text-center">Supervisor</p>
                </a>
    
        </div>

    </div>
    <div class="flex justify-center">
        <a href="/" class="text-md hover:text-pink-500">
            <img  src="{{ asset('images/icons/home.png')}}"/>
        </a>
    </div>

</x-guest-layout>