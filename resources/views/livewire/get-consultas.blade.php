<div class="p-4">
    
    @if($consultas->count() > 0)
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                
                <thead class="text-gray-600 capitalize text-md bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Id
                        </th>
                        <th scope="col" class="px-6 py-3">
                          Horário
                        </th>
                   
                        <th scope="col" class="px-6 py-3"> 
                            Status
                        </th>
                        <th>
                        </th>
                        <th>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    {{-- {{count($expedientes)}} --}}
                    @foreach ($consultas as $consulta)
                    {{-- {{$expediente->id}} --}}
                        <div>
                            <tr  class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600"  >
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{$consulta->id}}
                                </th>
                                <td class="px-6 py-4 capitalize">
                                    {{\Carbon\Carbon::create($consulta->start)->format('H:i:s')}}
                                </td>
                               
                                <td  class="px-6 py-4">
                                    {{$consulta->status}}
                                </td>
                               @if(Auth::guard()->name == 'voluntario')
                                    <td>
                                        <button class="text-md hover:text-pink-500">
                                            Editar
                                        </button>
                                    </td>
                                    <td>
                                        <button class="text-md hover:text-pink-500">
                                            Excluir
                                        </button>
                                    </td>
                                
                                @endif
                            </tr>
                        </div>
               
                           
                    @endforeach
    
                </tbody>
            </table>
        </div>
    @else 
        <p class="text-center text-sm text-gray-500">Você ainda não possui consultas</p>
    @endif 
</div>
    