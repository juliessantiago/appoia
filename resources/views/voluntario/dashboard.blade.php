<x-app-layout>
    <div class="flex p-10 justify-center">      

    </div> 
    {{-- @livewire('ShowVoluntarioExpedientes') --}}
    <h3 class="text-center text-200 text-xl text-pink-400">Meus Expedientes</h3>
    <div class="flex justify-start px-14 py-6"> 
        <div class="flex mt-4 md:mt-6">
            <a href="#"   data-popover-target="popover-default"  class="inline-flex items-center px-6 py-2 text-sm font-medium text-center text-white bg-purple-300 rounded-lg hover:bg-purple-400 focus:ring-4 focus:outline-none focus:ring-purple-400">Adicionar horário</a>
            {{-- <div data-popover id="popover-default" role="tooltip" class="absolute z-10 invisible inline-block w-64 text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800">
                <div class="px-3 py-2 bg-gray-100 border-b border-gray-200 rounded-t-lg dark:border-gray-600 dark:bg-gray-700">
                    <h3 class="font-semibold text-gray-900 dark:text-white">Popover title</h3>
                </div>
                <div class="px-3 py-2">
                    <p>And here's some amazing content. It's very engaging. Right?</p>
                </div>
                <div data-popper-arrow></div>
            </div> --}}
            <!--popover não está funcionando--> 
        </div>
    </div>

    @livewire('create-expediente')
   
    @livewire('get-expediente')

    <div class="flex justify-end px-14 py-6"> 
        <div class="flex mt-4 md:mt-6">
            <a href="{{route('voluntario.logout')}}" class="inline-flex items-center px-6 py-2 text-sm font-medium text-center text-white bg-purple-300 rounded-lg hover:bg-purple-400 focus:ring-4 focus:outline-none focus:ring-purple-400">Sair </a>
        </div>
    </div>
    
 
</x-app-layout>