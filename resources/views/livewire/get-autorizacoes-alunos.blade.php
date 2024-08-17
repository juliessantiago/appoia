<div>
   @if($alunosAutorizar)
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
                     Responsável
                  </th>
                  
                  <th scope="col" class="px-6 py-3"> 
                     Status
                  </th>
                  <th scope="col" class="px-6 py-3"> 
                     Registro em
                  </th>
                  <th scope="col" class="px-6 py-3">
                     Email
                  </th>           
                  <th scope="col" class="px-6 py-3">
                     Autorização
                  </th> 
                  <th scope="col" class="px-6 py-3">
                     
                  </th> 
            </tr>
         </thead>
         <tbody>
            @foreach ($alunosAutorizar as $aluno)            
                  <div wire:key={{ $aluno->id}}>
                     <tr  class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600"  >
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                              {{$aluno->id}}
                        </th>
                        <td class="px-6 py-4">
                             {{$aluno->name}}
                        </td>
                        <td class="px-6 py-4">
                           {{$aluno->responsavel}}
                        </td>
                  
                        <td  class="px-6 py-4">
                           @if($aluno->status == 0)
                              <p>Não liberado</p>
                           @else
                              <p>Liberado</p>
                           @endif
                       
                        </td>
                        <td>
                           @if($aluno->created_at == null)
                              <p class="text-center">Indisponível</p>
                           @else
                              {{\Carbon\Carbon::create($aluno->created_at)->format('d/m/y')}}
                           @endif 
                        </td>
                        <td class="px-6 py-4">
                           {{$aluno->email}}
                        </td>
                        <td class="px-6 py-4">
                           @if($aluno->linkAutorizacao==null)
                              <p class="text-center">Indisponível</p>
                           @else
                              <button wire:click="$dispatch('abreModalAutorizacao', { aluno: {{ $aluno }} })" class="text-md text-pink-500 hover:text-pink-600">
                                 Ver autorização
                              </button>
                           @endif
                        </td>
                        @if($aluno->linkAutorizacao == null || $aluno->linkAutorizacao == '' || $aluno->linkAutorizacao == ' ')
                           <td class="px-6 py-4">
                              <div> 
                                 <p>Indisponível</p>
                              </div> 
                           </td>   
                        @else
                           <td class="px-6 py-4">
                              <button wire:click="$dispatch('abreModalLiberaAluno', { aluno: {{ $aluno }} })">
                                 Liberar acesso
                              </button>
                           </td>
                        @endif 
                     </tr>
                  </div>

            @endforeach
         </tbody>
      </table>
   </div>

   @endif 

</div>
