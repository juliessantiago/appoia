<x-app-layout>
    <div class="flex p-10 justify-center">      

    </div> 
    {{-- @livewire('ShowVoluntarioExpedientes') --}}
    <h3 class="text-center text-200 text-xl text-pink-400">Meus Expedientes</h3>
    @livewire('get-expediente')

    <div class="flex justify-end px-14 py-6"> 
        <div class="flex mt-4 md:mt-6">
            <a href="{{route('voluntario.logout')}}" class="inline-flex items-center px-6 py-2 text-sm font-medium text-center text-white bg-purple-300 rounded-lg hover:bg-purple-400 focus:ring-4 focus:outline-none focus:ring-purple-400">Sair </a>
        </div>
    </div>
    
 
</x-app-layout>