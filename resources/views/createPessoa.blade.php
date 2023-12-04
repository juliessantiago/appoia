<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite([
        'resources/css/input.css', 
        'resources/js/app.js'
        ]) 
    <title>Criar Pessoa</title>
</head>
<body>
    <div class="container flex">
        <div class="relative mx-auto w-full max-w-md bg-white px-6 pt-10 pb-8 shadow-xl ring-1 ring-gray-900/5 sm:rounded-xl sm:px-10 mt-6">
            <div class="w-full">
                <div class="text-center">
                    <h1 class="text-3xl font-semibold text-violet-300">Criar pessoa</h1>
                    <p class="mt-2 text-gray-500"></p>
                </div>
                <div class="mt-5">
                    <form action="/storePessoa" method="POST">
                        <input type="hidden" name="_token" value="{{csrf_token()}}"/> 
                        <!--tomar cuidado com erro 419 relacionado a falta de token-->
                        <div class="relative mt-6">
                            <input type="text" name="nome" id="nome" placeholder="Nome" class="peer mt-1 w-full border-b-2 border-gray-300 px-0 py-1 placeholder:text-transparent focus:border-gray-500 focus:outline-none" autocomplete="NA" />
                            <label for="nome" class="pointer-events-none absolute top-0 left-0 origin-left -translate-y-1/2 transform text-sm text-gray-800 opacity-75 transition-all duration-100 ease-in-out peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-500 peer-focus:top-0 peer-focus:pl-0 peer-focus:text-sm peer-focus:text-gray-800">Nome completo</label>
                        </div>
                        <div class="relative mt-6">
                            <input type="text" name="cpf" id="cpf" placeholder="CPF" class="peer mt-1 w-full border-b-2 border-gray-300 px-0 py-1 placeholder:text-transparent focus:border-gray-500 focus:outline-none" autocomplete="NA" />
                            <label for="cpf" class="pointer-events-none absolute top-0 left-0 origin-left -translate-y-1/2 transform text-sm text-gray-800 opacity-75 transition-all duration-100 ease-in-out peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-500 peer-focus:top-0 peer-focus:pl-0 peer-focus:text-sm peer-focus:text-gray-800">CPF</label>
                        </div>
                        <div class="relative mt-6">
                            <input type="text" name="celular" id="celular" placeholder="celular" class="peer mt-1 w-full border-b-2 border-gray-300 px-0 py-1 placeholder:text-transparent focus:border-gray-500 focus:outline-none" autocomplete="NA" />
                            <label for="cpf" class="pointer-events-none absolute top-0 left-0 origin-left -translate-y-1/2 transform text-sm text-gray-800 opacity-75 transition-all duration-100 ease-in-out peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-500 peer-focus:top-0 peer-focus:pl-0 peer-focus:text-sm peer-focus:text-gray-800">Celular</label>
                        </div>
                        <div class="relative mt-6">
                            <input type="email" name="email" id="email" placeholder="Email" class="peer mt-1 w-full border-b-2 border-gray-300 px-0 py-1 placeholder:text-transparent focus:border-gray-500 focus:outline-none" autocomplete="NA" />
                            <label for="email" class="pointer-events-none absolute top-0 left-0 origin-left -translate-y-1/2 transform text-sm text-gray-800 opacity-75 transition-all duration-100 ease-in-out peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-500 peer-focus:top-0 peer-focus:pl-0 peer-focus:text-sm peer-focus:text-gray-800">Email</label>
                        </div>
                        <div class="relative mt-6">
                            <input type="password" name="password" id="password" placeholder="Senha" class="peer peer mt-1 w-full border-b-2 border-gray-300 px-0 py-1 placeholder:text-transparent focus:border-gray-50 focus:outline-none" />
                            <label for="password" class="pointer-events-none absolute top-0 left-0 origin-left -translate-y-1/2 transform text-sm text-gray-800 opacity-75 transition-all duration-100 ease-in-out peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-500 peer-focus:top-0 peer-focus:pl-0 peer-focus:text-sm peer-focus:text-gray-800">Senha</label>
                        </div>
                        <div class="relative mt-6">
                            <input type="password" name="passwordConfirm" id="psdConfirm" placeholder="Confirmar Senha" class="peer peer mt-1 w-full border-b-2 border-gray-300 px-0 py-1 placeholder:text-transparent focus:border-gray-50 focus:outline-none" />
                            <label for="psdConfirm" class="pointer-events-none absolute top-0 left-0 origin-left -translate-y-1/2 transform text-sm text-gray-800 opacity-75 transition-all duration-100 ease-in-out peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-500 peer-focus:top-0 peer-focus:pl-0 peer-focus:text-sm peer-focus:text-gray-800">Confirmar Senha</label>
                        </div>
                        <div class="relative mt-6  hidden" id="divSup">
                            <input type="text" name="CRP" id="crp" placeholder="CRP" class="peer peer mt-1 w-full border-b-2 border-gray-300 px-0 py-1 placeholder:text-transparent focus:border-gray-50 focus:outline-none" />
                            <label for="psdConfirm" class="pointer-events-none absolute top-0 left-0 origin-left -translate-y-1/2 transform text-sm text-gray-800 opacity-75 transition-all duration-100 ease-in-out peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-500 peer-focus:top-0 peer-focus:pl-0 peer-focus:text-sm peer-focus:text-gray-800">CRP</label>
                        </div>
                        <!------------tipo------------->
                        <div class="relative mt-6" onclick="chooseType()">
                            <div class="flex items-center mb-4 mt-2">
                                <input id="sup" type="radio" value="sup" name="tipo" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="sup" class="ms-2 text-sm font-medium text-gray-500 dark:text-gray-300">Supervisor</label>
                            </div>
                            <div class="flex items-center mb-4 mt-2">
                                <input  id="vol" type="radio" value="vol" name="tipo" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="vol" class="ms-2 text-sm font-medium text-gray-500 dark:text-gray-300">Voluntário</label>
                            </div>
                        <!------------------------------> 
                        </div>
                        <div class="my-6">
                            <button type="submit" class="w-full rounded-md bg-gradient-to-r from-violet-400 to-fuchsia-200  px-3 py-4 text-white focus:bg-gray-600 focus:outline-none">Criar</button>
                        </div>
                       
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        var div = document.getElementById('divSup');
        function chooseType(){
            var value = document.querySelector('input[name="tipo"]:checked').value;
            if (value == 'sup'){
                div.classList.remove('hidden');
                div.classList.add('block');
            } else{
                div.classList.add('hidden');
            }
        }
    </script>
</body>
</html>