<x-app-layout>
    <x-toaster-hub />
    <div class="flex">
        <a href="{{route('dashboardVoluntario')}}" class="inline-flex items-center px-4 py-2 text-sm font-medium"> 
            <img  src="{{ asset('images/icons/dashboard.png')}}" alt="voltar para dashboard" />
            <p class="text-sky-400 text-md ml-4">Dashboard</p>
        </a>
    </div>
    <div class="m-10">
        <p class="text-purple-400 text-3xl font-bold text-center mb-10">Foto de perfil</p>
        <p class="text-sm text-gray-400 text-center">Envie um arquivo .jpg ou .png de no máximo 1Mb</p>

        <div class="flex justify-center">

            @livewire('upload-foto-voluntario')
        </div>
    </div>
    <div class="flex justify-end px-14 py-1"> 
        <div class="flex mt-4 md:mt-1">
            <a href="{{route('supervisor.logout')}}" class="inline-flex items-center px-6 py-2 text-sm font-medium text-center text-white bg-purple-300 rounded-lg hover:bg-purple-400 focus:ring-4 focus:outline-none focus:ring-purple-400">Sair </a>
        </div>
    </div>
</x-app-layout>