<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite([
  'resources/css/input.css', 
  'resources/js/app.js'
  ])
  {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
  <title>Appoia</title>
  <link rel="icon" src="{{ asset('images/favicon/favicon.png')}}"">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
</head>
<body class="scroll-smooth">
  <nav class="bg-violet-400 dark:bg-gray-900">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
      <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
          {{-- <img  src="{{ asset('images/logo_pequeno.png')}}" class="h-8" alt="Appoia logo" /> --}}
          <span class="text-violet-200 text-lg text-bold">Appoia</span>
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
            {{-- <a href="#" class="text-lg block py-2 px-3 text-white bg-violet-400 rounded md:bg-transparent md:text-slate-50 md:p-0 dark:text-white md:dark:text-blue-500  md:hover:text-sky-400 " aria-current="page">Dashboard</a> --}}
          </li>
          <li>
            <a href="#" class="text-lg block py-2 px-3 text-white bg-violet-400 rounded md:bg-transparent md:text-slate-50 md:p-0 dark:text-white md:dark:text-blue-500  md:hover:text-sky-400 " aria-current="page">Como podemos ajudar</a>
          </li>
          <li>
              <a href="#" class="text-lg block py-2 px-3 text-white bg-violet-400 rounded md:bg-transparent md:text-slate-50 md:p-0 dark:text-white md:dark:text-blue-500  md:hover:text-sky-400 " aria-current="page">Como funciona</a>
          </li>
          <li>
              <a href="{{route('allAssuntos')}}" class="text-lg block py-2 px-3 text-white bg-violet-400 rounded md:bg-transparent md:text-slate-50 md:p-0 dark:text-white md:dark:text-blue-500  md:hover:text-sky-400 " aria-current="page">Agende uma conversa</a>
          </li>
          <li>
              <a href="{{ route('multilogin') }}" class="text-lg font-bold block py-2 px-3 text-white bg-violet-400 rounded md:bg-transparent md:text-slate-50 md:p-0 dark:text-white md:dark:text-blue-500  md:hover:text-sky-400 " aria-current="page">Entrar</a>
          </li>
          <li>
            <a href="{{ route('registerAlunoForm') }}" class="text-lg font-bold block py-2 px-3 text-white bg-violet-400 rounded md:bg-transparent md:text-slate-50 md:p-0 dark:text-white md:dark:text-blue-500  md:hover:text-sky-400 " aria-current="page">Criar Conta</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<!------------------------------header--------------------------------> 
<div class="flex">
  <img class="max-w-screen-lg" src="{{ asset('images/imagem_header.jpg')}}"> 
  <div class="flex flex-col justify-center align-middle">
    <h1 class="text-violet-300 text-5xl">Você não esta</h1>
    <h2 class="text-violet-400 text-6xl">sozinho</h2>
  </div>
</div>
<!-----------------------Como podemos ajudar------------------------>
<h4 class="text-center text-sky-300 text-4xl p-6 font-bold">Como podemos ajudar você</h4>

<div class="flex flex-row p-6 align-middle justify-between">
  <!-- <h3 class="text-purple-300 text-center text-3xl p-2">Cuide de sua mente</h3>
  <p class="text-fuchsia-200 text-center text-2xl p-2">Sua saúde mental é tão importante quanto sua saúde física</p> -->

  <div class="flex flex-col flex-1 items-center bg-fuchsia-200 border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl  dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 py-4 px-2 m-6 max-w-md">
      <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="{{ asset('images/stickers/sentimentos_confusos.png')}}" alt="sentimentos confusos">
      <div class="flex flex-col justify-between p-4 leading-normal">
          <h5 class="mb-2 text-2xl font-bold tracking-tight text-slate-50 dark:text-white">Lidar com sentimentos confusos</h5>
      </div>
  </div>

  <div href="#" class="flex flex-col flex-1 items-center bg-fuchsia-200 border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl  dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 py-4 px-2 m-6">
      <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="{{ asset('images/stickers/habitos.png')}}" alt="habitos">
      <div class="flex flex-col justify-between p-4 leading-normal">
          <h5 class="mb-2 text-2xl font-bold tracking-tight text-slate-50 dark:text-white">Adquirir bons hábitos</h5>
      </div>
  </div>

  <div href="#" class="flex flex-col flex-1 items-center bg-fuchsia-200 border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl  dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 py-4 px-2 m-6">
    <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="{{ asset('images/stickers/escola.png')}}" alt="habitos">
    <div class="flex flex-col justify-between p-4 leading-normal">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-slate-50 dark:text-white">Orientação vocacional</h5>
    </div>
  </div>

</div>

<div class="flex flex-row p-6 align-middle justify-between">
  <div href="#" class="flex flex-col flex-1 items-center bg-fuchsia-200 border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl  dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 py-4 px-2 m-6">
      <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="{{ asset('images/stickers/relacionamentos.png')}}" alt="sentimentos confusos">
      <div class="flex flex-col justify-between p-4 leading-normal">
          <h5 class="mb-2 text-2xl font-bold tracking-tight text-slate-50 dark:text-white">Ter relacionamentos saudáveis</h5>
      </div>
  </div>

  <div href="#" class="flex flex-col flex-1 items-center bg-fuchsia-200 border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl  dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 py-4 px-2 m-6">
      <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="{{ asset('images/stickers/luto.png')}}" alt="habitos">
      <div class="flex flex-col justify-between p-4 leading-normal">
          <h5 class="mb-2 text-2xl font-bold tracking-tight text-slate-50 dark:text-white">Lidar com o luto</h5>
      </div>
  </div>

  <div href="#" class="flex flex-col flex-1 items-center bg-fuchsia-200 border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl  dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 py-4 px-2 m-6">
    <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="{{ asset('images/stickers/autoconhecimento.png')}}" alt="habitos">
    <div class="flex flex-col justify-between p-4 leading-normal">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-slate-50 dark:text-white">Autoconhecimento</h5>
    </div>
  </div>

</div>

<!-----------------------------------Como funciona-------------------------------------------->
<div class="flex justify-center">
  <img src="{{ asset('images/funciona.png')}}"">
</div>

<!----------------------------------Depoimentos------------------------------------------------->
<div class="flex justify-around align-middle mt-5 mb-10 ">
    
    <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
      <a href="#">
          <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-500 dark:text-white">Aluna Anônima </h5>
          <h6 class="text-gray-400 font-bold dark:text-white"> Escola Cel. Pedro Osório - Pelotas</h6>
      </a>
      <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">"Nunca tinha conversado com psicólogo antes, gostei. Me ajudou muito"</p>
     <span class="text-sm "></span>
    </div>

    <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
      <a href="#">
          <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-500 dark:text-white">Aluna Anônima </h5>
          <h6 class="text-gray-400 font-bold dark:text-white"> Colégio Municipal Pelotense - Pelotas</h6>
      </a>
      <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">"Foi muito bom! Pude conversar sobre minhas ansiedades com total liberdade"</p>
      <span class="text-sm "></span>
    </div>

    <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
      <a href="#">
          <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-500 dark:text-white">Aluno Anônimo </h5>
          <h6 class="text-gray-400 font-bold dark:text-white"> Escola Municipal Dr. Acides Mendonça Lima - Pelotas</h6>
      </a>
      <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">"Gostei! A voluntária me ouviu com atenção."</p>
      <span class="text-sm "></span>
    </div>
    
    

</div>

<!------------------------------------Escolha um voluntário--------------------------------->
<div class="flex justify-center py-10 my-10">
  <button type="button" class="text-white bg-sky-300 hover:bg-sky-400 focus:outline-none focus:ring-4 focus:ring-sky-300 font-medium rounded-full text-sm px-10 py-4 text-center mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-sky-900"> <a href="{{route('allVoluntarios')}}">Ver voluntários</a></button>
</div>
<!--------------------------------------Footer------------------------------------------------------>
<footer class="bg-purple-300  shadow dark:bg-gray-800">
  <div class="w-full mx-auto max-w-screen-xl p-4 md:flex md:items-center md:justify-between">
    <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2024 <a href="#" class="hover:underline">Appoia</a>. Licença MIT.
  </span>
  <ul class="flex flex-wrap items-center mt-3 text-base font-medium text-gray-500 dark:text-gray-400 sm:mt-0">
      <li>
          <a href="#" class="hover:text-slate-50 me-4 md:me-6">Como podemos ajudar</a>
      </li>
      <li>
          <a href="#" class="hover:text-slate-50 me-4 md:me-6">Como funciona</a>
      </li>
      <li>
          <a href="{{route('allAssuntos')}}" class="hover:text-slate-50 me-4 md:me-6">Agende uma conversa</a>
      </li>
      <li>
        <a href="#" class="hover:text-slate-50 me-4 md:me-6">Depoimentos</a>
      </li>

      <li>
        <a href="{{route('multilogin')}}" class=" font-bold hover:text-slate-50 me-4 md:me-6">Sou voluntário</a>
      </li>

      <li>
        <a href="{{route('multilogin')}}" class=" font-bold hover:text-slate-50 me-4 md:me-6">Sou supervisor</a>
      </li>

      <li>
        <a href="/admin" class=" font-bold hover:text-slate-50 me-4 md:me-6">Administrativo</a>
      </li>
  </ul>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<!-- <script src="https://unpkg.com/scrollreveal"></script> -->
</body>
</html>