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
    <title>Entrar</title>
</head>
<body>
    <nav class="bg-violet-400 dark:bg-gray-900">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
          <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
              <img  src="{{ asset('images/logo_provisorio.png')}}" class="h-8" alt="Appoia logo" />
              <span class="text-violet-300 tet-sm text-bold">Appoia</span>
              <!-- <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Appoia</span> -->
          </a>
          <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
              <span class="sr-only">Abrir menu</span>
              <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
              </svg>
          </button>
          <div class="hidden w-full md:block md:w-auto" id="navbar-default">
            <ul class="font-medium flex flex-col p-4 md:p-0 mt-4  md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
              <li>
                <a href="#" class="text-lg block py-2 px-3 text-white bg-violet-400 rounded md:bg-transparent md:text-slate-50 md:p-0 dark:text-white md:dark:text-blue-500  md:hover:text-sky-400 " aria-current="page">Home</a>
              </li>
              <li>
                <a href="#" class="text-lg block py-2 px-3 text-white bg-violet-400 rounded md:bg-transparent md:text-slate-50 md:p-0 dark:text-white md:dark:text-blue-500  md:hover:text-sky-400 " aria-current="page">Como podemos ajudar</a>
              </li>
              <li>
                  <a href="#" class="text-lg block py-2 px-3 text-white bg-violet-400 rounded md:bg-transparent md:text-slate-50 md:p-0 dark:text-white md:dark:text-blue-500  md:hover:text-sky-400 " aria-current="page">Como funciona</a>
              </li>
              <li>
                  <a href="#" class="text-lg block py-2 px-3 text-white bg-violet-400 rounded md:bg-transparent md:text-slate-50 md:p-0 dark:text-white md:dark:text-blue-500  md:hover:text-sky-400 " aria-current="page">Agende uma conversa</a>
              </li>
              <li>
                  <a href="#" class="text-lg block py-2 px-3 text-white bg-violet-400 rounded md:bg-transparent md:text-slate-50 md:p-0 dark:text-white md:dark:text-blue-500  md:hover:text-sky-400 " aria-current="page">Depoimentos</a>
              </li>
           
            </ul>
          </div>
        </div>
    </nav>
    <!--centralizar verticalmente o form! -->
    <div class="relative mx-auto w-full max-w-md bg-white px-6 pt-10 pb-8 shadow-xl ring-1 ring-gray-900/5 sm:rounded-xl sm:px-10 mt-6">
        <div class="flex justify-center">
            <img src="{{ asset('images/stickers/password.png')}}"">
        </div>
        <div class="w-full">
            <div class="text-center">
                <h1 class="text-3xl font-semibold text-violet-300">Bem vindo(a)!</h1>
                <p class="mt-2 text-gray-500"></p>
            </div>
            <div class="mt-5">
                <form action="">
                    <div class="relative mt-6">
                        <input type="email" name="email" id="email" placeholder="Email" class="peer mt-1 w-full border-b-2 border-gray-300 px-0 py-1 placeholder:text-transparent focus:border-gray-500 focus:outline-none" autocomplete="NA" />
                        <label for="email" class="pointer-events-none absolute top-0 left-0 origin-left -translate-y-1/2 transform text-sm text-gray-800 opacity-75 transition-all duration-100 ease-in-out peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-500 peer-focus:top-0 peer-focus:pl-0 peer-focus:text-sm peer-focus:text-gray-800">Email</label>
                    </div>
                    <div class="relative mt-6">
                        <input type="password" name="password" id="password" placeholder="Senha" class="peer peer mt-1 w-full border-b-2 border-gray-300 px-0 py-1 placeholder:text-transparent focus:border-gray-500 focus:outline-none" />
                        <label for="password" class="pointer-events-none absolute top-0 left-0 origin-left -translate-y-1/2 transform text-sm text-gray-800 opacity-75 transition-all duration-100 ease-in-out peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-500 peer-focus:top-0 peer-focus:pl-0 peer-focus:text-sm peer-focus:text-gray-800">Senha</label>
                    </div>
                    <div class="my-6">
                        <button type="submit" class="w-full rounded-md bg-gradient-to-r from-violet-400 to-fuchsia-200  px-3 py-4 text-white focus:bg-gray-600 focus:outline-none">Entrar</button>
                    </div>
                    <p class="text-center text-sm text-gray-500">Não tem uma conta ainda?
                        <a href="{{ url('/cadastrar') }}
                            class="font-semibold text-gray-600 hover:underline focus:text-gray-800 focus:outline-none">
                            Criar conta
                        </a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</body>
</html>