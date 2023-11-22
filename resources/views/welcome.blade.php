<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Appoia</title>
  <!--Configuração do build está errada, usando cdn por enquanto-->
  <!--CSS-->
  <!-- <link rel="stylesheet" href="../css/input.css"> -->
  <link href="../../dist/output.css" rel="stylesheet">
  <!--swiper-->
  <link rel="icon" type="image/x-icon" href="../img/iconezinho.ico">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
</head>
<body>


<nav class=" dark:bg-gray-900">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
    <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
        <img src="" class="h-8" alt="Appoia logo" />
        <!-- <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Appoia</span> -->
    </a>
    <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
        <span class="sr-only">Abrir menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
        </svg>
    </button>
    <div class="hidden w-full md:block md:w-auto" id="navbar-default">
      <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
        <li>
          <a href="#" class="text-lg block py-2 px-3 text-white bg-violet-400 rounded md:bg-transparent md:text-sky-300 md:p-0 dark:text-white md:dark:text-blue-500  md:hover:text-sky-400 " aria-current="page">Home</a>
        </li>
        <li>
          <a href="#" class="text-lg block py-2 px-3 text-white bg-violet-400 rounded md:bg-transparent md:text-sky-300 md:p-0 dark:text-white md:dark:text-blue-500  md:hover:text-sky-400 " aria-current="page">Como podemos ajudar</a>
        </li>
        <li>
            <a href="#" class="text-lg block py-2 px-3 text-white bg-violet-400 rounded md:bg-transparent md:text-sky-300 md:p-0 dark:text-white md:dark:text-blue-500  md:hover:text-sky-400 " aria-current="page">Como funciona</a>
        </li>
        <li>
            <a href="#" class="text-lg block py-2 px-3 text-white bg-violet-400 rounded md:bg-transparent md:text-sky-300 md:p-0 dark:text-white md:dark:text-blue-500  md:hover:text-sky-400 " aria-current="page">Agende uma conversa</a>
        </li>
        <li>
            <a href="#" class="text-lg block py-2 px-3 text-white bg-violet-400 rounded md:bg-transparent md:text-sky-300 md:p-0 dark:text-white md:dark:text-blue-500  md:hover:text-sky-400 " aria-current="page">Depoimentos</a>
        </li>
     
      </ul>
    </div>
  </div>
</nav>
<!------------------------------header--------------------------------> 
<div class="flex">
  <img class="" src="https://img.freepik.com/vetores-gratis/conceito-plano-de-saude-mental-com-pessoas-que-lidam-com-ilustracao-vetorial-de-problemas-psicologicos_1284-80677.jpg?w=900&t=st=1700628528~exp=1700629128~hmac=a3df4356e6e093f4021255e27741959222fe4924fbf087a75d99661b115ecd2d">
  <div class="">
    <h1 class="text-violet-300 text-6xl">Você não esta sozinho</h1>
  </div>
</div>
<!-----------------------Como podemos ajudar------------------------>
<h4 class="text-center text-fuchsia-200 text-3xl p-6">Como podemos ajudar você</h4>

<div class="flex flex-row p-6 align-middle justify-between">
  <!-- <h3 class="text-purple-300 text-center text-3xl p-2">Cuide de sua mente</h3>
  <p class="text-fuchsia-200 text-center text-2xl p-2">Sua saúde mental é tão importante quanto sua saúde física</p> -->

  <div href="#" class="flex flex-col items-center bg-fuchsia-200 border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl  dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 py-4 px-2 m-6">
      <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="../img/stickers/sentimentos_confusos.png" alt="sentimentos confusos">
      <div class="flex flex-col justify-between p-4 leading-normal">
          <h5 class="mb-2 text-2xl font-bold tracking-tight text-slate-50 dark:text-white">Lidar com sentimentos confusos</h5>
      </div>
  </div>

  <div href="#" class="flex flex-col items-center bg-fuchsia-200 border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl  dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 py-4 px-2 m-6">
      <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="../img/stickers/habitos.png" alt="habitos">
      <div class="flex flex-col justify-between p-4 leading-normal">
          <h5 class="mb-2 text-2xl font-bold tracking-tight text-slate-50 dark:text-white">Adquirir bons hábitos</h5>
      </div>
  </div>

  <div href="#" class="flex flex-col items-center bg-fuchsia-200 border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl  dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 py-4 px-2 m-6">
    <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="../img/stickers/habitos.png" alt="habitos">
    <div class="flex flex-col justify-between p-4 leading-normal">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-slate-50 dark:text-white">Orientação vocacional</h5>
    </div>
  </div>

</div>

<!------------------------------------Escolha um voluntário--------------------------------->
<div class="container p-6 flex justify-center">
  <button type="button" class="text-white bg-sky-300 hover:bg-sky-400 focus:outline-none focus:ring-4 focus:ring-sky-300 font-medium rounded-full text-sm px-10 py-4 text-center mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-sky-900">Agendar Horário</button>
</div>
<!-----------------------------------Como funciona-------------------------------------------->


<div id="default-carousel" class="relative w-full bg-fuchsia-200" data-carousel="slide">

  <!-- Carousel wrapper -->
  <div class="relative h-56 rounded-lg md:h-96">
       <!-- Item 1 -->
      <div class="hidden duration-700 ease-in-out bg-sky-400" data-carousel-item>
        <img src="https://i-am-autism.org.uk/wp-content/uploads/2021/10/what-is-mental-health-1.png">
      </div>
      <!-- Item 2 -->
      <div class="hidden duration-700 ease-in-out" data-carousel-item>
        <p>TESTE</p>
      </div>
      <!-- Item 3 -->
      <div class="hidden duration-700 ease-in-out" data-carousel-item>
        <p>TESTE</p>
      </div>
     
  </div>
  <!-- Slider indicators -->
  <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
      <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
      <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
      <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
      <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
      <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
  </div>
  <!-- Slider controls -->
  <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
      <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
          <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
          </svg>
          <span class="sr-only">Previous</span>
      </span>
  </button>
  <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
      <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
          <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
          </svg>
          <span class="sr-only">Next</span>
      </span>
  </button>
</div>

<!--------------------------------------Footer------------------------------------------------------>
<footer class="bg-purple-300  shadow dark:bg-gray-800">
  <div class="w-full mx-auto max-w-screen-xl p-4 md:flex md:items-center md:justify-between">
    <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="#" class="hover:underline">Appoia</a>. Licença MIT.
  </span>
  <ul class="flex flex-wrap items-center mt-3 text-base font-medium text-gray-500 dark:text-gray-400 sm:mt-0">
      <li>
          <a href="#" class="hover:text-slate-50 me-4 md:me-6">Como podemos ajudar</a>
      </li>
      <li>
          <a href="#" class="hover:text-slate-50 me-4 md:me-6">Como funciona</a>
      </li>
      <li>
          <a href="#" class="hover:text-slate-50 me-4 md:me-6">Agende uma conversa</a>
      </li>
      <li>
        <a href="#" class="hover:text-slate-50 me-4 md:me-6">Depoimentos</a>
    </li>
  </ul>
  </div>
</footer>


 
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<!-- <script src="https://unpkg.com/scrollreveal"></script> -->
</body>
</html>