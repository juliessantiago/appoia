<x-app-layout >
{{-- @if( Auth::user()->status == 0) --}}
        <div class="m-10">
            <div class="flex justify-center">
                <img  src="{{ asset('images/stickers/autorizacao.png')}}" />
            </div>
            <div class="justify-center border-3 mt-10">
                <p class="text-center text-pink-300 text-xl ">Olá! Como você é menor de idade,</p>
                <p class="text-pink-300 text-xl text-center"> vamos precisar de uma autorização, ok?</p>
            </div>
          
            <div class="flex justify-center align-middle mt-10">
                <p class="self-center mx-4 text-gray-400 text-lg">Primeiro, você precisa fazer download do PDF abaixo</p>
            </div>
            <div class="flex justify-center align-middle mt-10"> <!--download--> 
                @livewire('download-autorizacao')
            </div>
            <div class="flex justify-center align-middle mt-10">
                <p class="self-center mx-4 text-gray-400 text-lg">Depois você vai precisar imprimir a autorização
                    e pedir que seu responsável assine</p>
        </div>
        
            <div class="flex justify-center align-middle mt-10">
                <h2 class="self-center mx-4 text-gray-400 text-lg">Agora é só tirar uma foto e colocar aqui abaixo. Pronto!</h2>
            </div>
            <div class="flex justify-center align-middle ">
                <h2 class="self-center mx-4 text-gray-400 text-lg">O arquivo deve ser no formato .jpg ou .png e pode ter no máximo 1Mb</h2>
            </div>
        <div class="flex justify-center align-middle mt-10">
                @livewire('upload-autorizacao')
        </div>
    </div>
{{-- @endif --}}
    <div class="flex justify-end px-14 py-6"> 
        <div class="flex mt-4 md:mt-6">
            <a href="{{route('aluno.logout')}}" class="inline-flex items-center px-6 py-2 text-sm font-medium text-center text-white bg-purple-300 rounded-lg hover:bg-purple-400 focus:ring-4 focus:outline-none focus:ring-purple-400">Sair </a>
        </div>
    </div>
</x-app-layout>