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
    <title>Voluntários</title>
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
            <ul class="font-medium flex flex-col p-4 
            md:p-0 mt-4  md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
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
    <div class="container">
      <h4 class="text-center text-sky-300 text-4xl p-6 font-bold">Nossos voluntários</h4>
      <div class="flex justify-around">
        @foreach($voluntarios as $voluntario)
          <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 m-4">
        
            <div class="flex flex-col items-center pb-10">
                <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="/docs/images/people/profile-picture-3.jpg" alt="foto voluntário"/>
                <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">Nome do voluntário</h5>
                <span class="text-sm text-gray-500 dark:text-gray-400">Voluntário desde: data</span>
                <span class="text-sm text-gray-500 dark:text-gray-400">Universidade: instituição</span>

                <div class="flex mt-4 md:mt-6">
                    <a href="#" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-sky-300 rounded-lg hover:bg-sky-400 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Ver detalhes</a>
                </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
</body>
</html>