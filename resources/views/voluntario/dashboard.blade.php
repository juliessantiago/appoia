<x-app-layout>
    <div class="flex p-10 justify-center">      
        
        @if(session('success'))
        <div class="flex bg-green-300 p-10 border-green-400 rounded-lg">
              <p class="text-white">  {{session('success')}}  </p>  
        </div>
        @endif
    </div> 
        <p class="text-center text-200 text-xl font-bold text-purple-400">Meus Expedientes</p>
        <div class="flex justify-start px-14 py-6"> 
    </div>
 
   <div class="m-5">
        @livewire('get-expediente')
   </div>

   <div class="m-5">
    @livewire('create-expediente')
</div>
{{-- css do create-expediente (max-w-sm) está afetando o resto dos elementos da página  --}}
{{-- botão de sair some de vista quando há erros no formulário --}}

    <div class="flex justify-end px-14 py-6"> 
        <div class="flex mt-4 md:mt-6">
            <a href="{{route('voluntario.logout')}}" class="inline-flex items-center px-6 py-2 text-sm font-medium text-center text-white bg-purple-300 rounded-lg hover:bg-purple-400 focus:ring-4 focus:outline-none focus:ring-purple-400">Sair </a>
        </div>
    </div>
    
 
</x-app-layout>