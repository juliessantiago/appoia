<script>
   let url = 'detalhesVoluntario/'
</script>
<div>
    @if($voluntarios->count() > 0)
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
           <thead class="text-gray-600 capitalize text-md bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
              
              <tr>
                    <th scope="col" class="px-6 py-3">
                       Id
                    </th>
                    <th scope="col" class="px-6 py-3">
                       Nome 
                    </th>
                    <th scope="col" class="px-6 py-3">
                       Email
                    </th>
                    
                    <th scope="col" class="px-6 py-3"> 
                       Telefone
                    </th>
                    <th scope="col" class="px-6 py-3"> 
                       Matrícula
                    </th>
                   
                    <th scope="col" class="px-6 py-3">
                       
                    </th> 
              </tr>
           </thead>
           <tbody>
              @foreach ($voluntarios as $voluntario)            
                    <div wire:key={{ $voluntario->id}}>
                       <tr  class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600"  >
                          <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{$voluntario->id}}
                          </th>
                          <td class="px-6 py-4 capitalize">
                               {{$voluntario->name}}
                          </td>
                          <td class="px-6 py-4">
                             {{$voluntario->email}}
                          </td>
            
                          <td  class="px-6 py-4">
                             {{$voluntario->telefone}}
                          </td>

                          <td  class="px-6 py-4">
                            {{$voluntario->matricula}}
                         </td>
                         <td  class="px-6 py-4">
                           <a href="{{route('detalhesVoluntario', ['id' => $voluntario->id] )}}">
                              <button class="text-md text-pink-500 hover:text-pink-600">
                                 Ver detalhes
                              </button>
                           </a>
                          
                        </td>
     
      
                       </tr>
                    </div>
  
              @endforeach
           </tbody>
        </table>
        {{-- {{ $voluntarios->links() }} --}}

     </div>
    @else
        <p class="m-4 text-center text-gray-400">Nenhum voluntário encontrado</p>
    @endif
</div>

