<x-app-layout>
    <div class="flex p-10 justify-center">      
        <nav class="bg-white border-gray-200 dark:border-gray-600">
            <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl p-4">
               
                <div class="text-purple-400">
                    <h1 class="text-2xl">Ações</h1>
                </div>
            </div>
       
            <div id="mega-menu-full-dropdown outline outline-2" class="mt-1 bg-white border-gray-200 shadow-sm border-y dark:bg-gray-800 dark:border-gray-600">
                <div class="grid max-w-screen-xl px-4 py-5 mx-auto text-gray-900 dark:text-white sm:grid-cols-2 md:grid-cols-3 md:px-6">
                    <ul aria-labelledby="mega-menu-full-dropdown-button">
                        <li class="py-10 px-20  min-w-16 hover:bg-gray-100">
                            <a href="#" class="block p-3 rounded-lg  dark:hover:bg-gray-700">
                                <div class="font-semibold text-center text-gray-500">Assuntos</div>
                            </a>
                        </li>
                    </ul>

                    <ul aria-labelledby="mega-menu-full-dropdown-button">
                        <li class="py-10 px-20 min-w-16  hover:bg-gray-100">
                            <a href="#" class="block p-3 rounded-lg  dark:hover:bg-gray-700">
                                <div class="font-semibold text-center text-gray-500">Expedientes</div>
                            </a>
                        </li>
                    </ul>

                    <ul aria-labelledby="mega-menu-full-dropdown-button">
                        <li class="py-10 px-20  min-w-16 hover:bg-gray-100">
                            <a href="#" class="block p-3 rounded-lg  dark:hover:bg-gray-700">
                                <div class="font-semibold text-center text-gray-500">Minhas Consultas</div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
     
    </div> 
    @livewire('ShowVoluntarioExpedientes')
    <div class="flex justify-end px-14"> 
        <div class="flex mt-4 md:mt-6">
            <a href="{{route('voluntario.logout')}}" class="inline-flex items-center px-6 py-2 text-sm font-medium text-center text-white bg-purple-300 rounded-lg hover:bg-purple-400 focus:ring-4 focus:outline-none focus:ring-purple-400">Sair </a>
        </div>
    </div>
    
 
</x-app-layout>