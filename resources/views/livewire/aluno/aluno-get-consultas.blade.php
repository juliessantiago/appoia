<div>
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
                                Dia 
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Horário
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Link para reunião
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Status
                            </th>
                           
                            <th>
                            </th>
                            {{-- <th>
                            </th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        {{-- {{count($expedientes)}} --}}
                        @foreach ($consultas as $consulta)
                            <div>
                                <tr  class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600"  >
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{$consulta->id}}
                                    </th>
                                    <td class="px-6 py-4 capitalize">
                                        {{\Carbon\Carbon::create($consulta->dia)->format('d/m/y')}}
                                        {{\Carbon\Carbon::create($consulta->dia)->dayName}}
                                    </td>
                                    <td class="px-6 py-4 capitalize">
                                        {{\Carbon\Carbon::create($consulta->start)->format('H:i:s')}}
                                    </td>
                                    <td class="px-6 py-4 capitalize">
                                        <input value="{{$consulta->link}}" type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-purple-300 focus:border-purple-300 block max-w-md p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 cursor-pointer" placeholder="link" required />
                                    </td>
                                    <td class="px-6 py-4 capitalize">
                                        
                                        {{$consulta->status}}
                                    </td>
                                  
                                        {{-- <td>
                                            <button class="text-md hover:text-pink-500">
                                                Excluir
                                            </button>
                                        </td> --}}
                                            
                                </tr>
                            </div>
                   
                               
                        @endforeach
        
                    </tbody>
                </table>
            </div>
        @else 
            <p class="text-center text-sm text-gray-500">Você não possui consulta marcada para hoje</p>
        @endif 
    </div>
        
</div>
