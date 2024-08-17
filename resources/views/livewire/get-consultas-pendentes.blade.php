<div class="p-4">
    {{-- {{$consultas}} --}}
    @if($pendentes->count() > 0)
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                
                <thead class="text-gray-600 capitalize text-md bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Id
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Data
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
                    @foreach ($pendentes as $consulta)
                    {{-- {{$expediente->id}} --}}
                        <div>
                            <tr  class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600"  >
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{$consulta->id}}
                                </th>
                                <td class="px-6 py-4 capitalize">
                                    {{\Carbon\Carbon::create($consulta->dia)->format('d/m/y')}}
                                </td>
                                <td class="px-6 py-4 capitalize">
                                    {{\Carbon\Carbon::create($consulta->start)->format('H:i:s')}}
                                </td>
                               
                                <td  class="px-6 py-4">
                                    {{$consulta->status}}
                                </td>
                                <td class="px-6 py-4">
                                    <button wire:click="$dispatch('abreModalAutorizaConsulta', { consulta: {{ $consulta }} })" class="text-md text-pink-500 hover:text-pink-600">
                                        Autorizar 
                                     </button>
                                </td>
                            </tr>
                        </div>
               
                           
                    @endforeach
    
                </tbody>
            </table>
        </div>
    @else 
        
        <p class="text-center text-sm text-gray-500">Não há consultas a serem autorizadas</p>
    @endif 
</div>
    