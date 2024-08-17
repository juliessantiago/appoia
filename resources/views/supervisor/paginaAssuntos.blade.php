<x-app-layout>
    <x-toaster-hub />
    <div class="m-10">
        <x-toaster-hub />
    </div>
    <p class="text-purple-400 text-3xl font-bold text-center">Assuntos</p>
    <div class="m-10">
        <p class="text-purple-400 text-xl font-bold text-center">Criar novo assunto</p>
        <div class="flex items-center justify-center"> 
            @livewire('create-assunto')
        </div>
    </div>
    <div class="m-10">
        <p class="text-purple-400 text-xl font-bold text-center">Assuntos</p>
        @livewire('search-assunto')
    </div>
    <div class="flex justify-end px-14 py-6">
        <div class="flex mt-4 md:mt-">
            <a href="{{route('supervisor.logout')}}" class="inline-flex items-center px-6 py-2 text-sm font-medium text-center text-white bg-purple-300 rounded-lg hover:bg-purple-400 focus:ring-4 focus:outline-none focus:ring-purple-400">Sair </a>
        </div>
    </div>
</x-app-layout>