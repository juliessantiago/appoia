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
    <!-- Hotjar Tracking Code for Site 5077382 (nome ausente) -->
    <script> //Hotjar
      (function(h,o,t,j,a,r){
          h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
          h._hjSettings={hjid:5077382,hjsv:6};
          a=o.getElementsByTagName('head')[0];
          r=o.createElement('script');r.async=1;
          r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
          a.appendChild(r);
      })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
    </script>
</head>
<body class="scroll-smooth">
  <nav class="bg-pink-300 dark:bg-gray-900">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
      <a href="/" class="inline-flex items-center px-6 py-2 text-sm font-medium"> 
          <img  src="{{ asset('images/icone_appoia.png')}}" class="h-8" alt="voltar para página inicial" />
          <p class="text-pink-300 text-md ml-4 font-bold">Appoia</p>
      </a>
             
      {{-- <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
          <span class="sr-only">Abrir menu</span>
          <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
          </svg>
      </button> --}}
      <div class="hidden w-full md:block md:w-auto" id="navbar-default">
        <ul class="font-medium flex flex-col p-4 
        md:p-0 mt-4  md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
          
          <li>
            <a href="#ajudar" class="text-lg block py-2 px-3  bg-violet-400 rounded md:bg-transparent md:text-slate-50 md:p-0 dark:text-white md:dark:text-blue-500  text-white font-bold" aria-current="page">Como podemos ajudar</a>
          </li>
          <li>
              <a href="#como_funciona" class="text-lg block py-2 px-3 bg-violet-400 rounded md:bg-transparent md:text-slate-50 md:p-0 dark:text-white md:dark:text-blue-500 text-white font-bold" aria-current="page">Como funciona</a>
          </li>
          <li>
              <a href="#blog" class="text-lg block py-2 px-3 bg-violet-400 rounded md:bg-transparent md:text-slate-50 md:p-0 dark:text-white md:dark:text-blue-500 font-bold text-white" aria-current="page">Blog</a>
          </li>
          <li>
            <a href="{{ route('multilogin') }}" class="text-lg block py-2 px-3 bg-violet-400 rounded md:bg-transparent md:text-slate-50 md:p-0 dark:text-white md:dark:text-blue-500 font-bold text-white" aria-current="page">Entrar</a>
          </li>
          <li>
            <a href="{{ route('registerAlunoForm') }}" class="text-lg block py-2 px-3 bg-violet-400 rounded md:bg-transparent md:text-slate-50 md:p-0 dark:text-white md:dark:text-blue-500  font-bold text-white" aria-current="page">Criar Conta</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<!------------------------------header--------------------------------> 
<div class="flex justify-around mb-10">
  <img class="max-w-screen-md" src="{{ asset('images/imagem_header.jpg')}}"> 
  <div class="flex flex-col justify-center align-middle">
    <h1 class="text-purple-300 text-7xl">Você não está</h1>
    <h2 class="text-purple-400 text-8xl ml-6">sozinho</h2>
  </div>
</div>
<!-----------------------Como podemos ajudar------------------------>
<div class="font-bold text-center text-4xl text-pink-400 mt-10"> ... </div>
<h4 class="text-center text-sky-300 text-4xl p-6 font-bold" id="ajudar">Como podemos ajudar você</h4>

<div class="flex flex-row p-6 align-middle justify-around">
  <!-- <h3 class="text-purple-300 text-center text-3xl p-2">Cuide de sua mente</h3>
  <p class="text-fuchsia-200 text-center text-2xl p-2">Sua saúde mental é tão importante quanto sua saúde física</p> -->

  <div class="flex flex-col flex-1 items-center md:flex-row md:max-w-xl  dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 py-4 px-2 m-6 max-w-md">
      <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="{{ asset('images/stickers/raiva.png')}}" alt="sentimentos confusos">
      <div class="flex flex-col justify-between p-4 leading-normal">
          <h5 class="mb-2 text-2xl font-bold tracking-tight text-purple-300 dark:text-white">Lidar com emoções</h5>
      </div>
  </div>

  <div href="#" class="flex flex-col flex-1 items-center  md:flex-row md:max-w-xl  dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 py-4 px-2 m-6">
      <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="{{ asset('images/stickers/habitos.png')}}" alt="habitos">
      <div class="flex flex-col justify-between p-4 leading-normal">
          <h5 class="mb-2 text-2xl font-bold tracking-tight text-purple-300 dark:text-white">Adquirir bons hábitos</h5>
      </div>
  </div>

  <div href="#" class="flex flex-col flex-1 items-center md:flex-row md:max-w-xl  dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 py-4 px-2 m-6">
    <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="{{ asset('images/stickers/escola.png')}}" alt="habitos">
    <div class="flex flex-col justify-between p-4 leading-normal">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-purple-300 dark:text-white">Orientação vocacional</h5>
    </div>
  </div>

</div>

<div class="flex flex-row p-6 align-middle justify-around">
  <div href="#" class="flex flex-col flex-1 items-center md:flex-row md:max-w-xl  dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 py-4 px-2 m-6">
      <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="{{ asset('images/stickers/relacionamentos.png')}}" alt="sentimentos confusos">
      <div class="flex flex-col justify-between p-4 leading-normal">
          <h5 class="text-2xl font-bold tracking-tight text-purple-300 dark:text-white">Melhorar</h5>
          <h5 class="mb-2 text-2xl font-bold tracking-tight text-purple-300 dark:text-white">relacionamentos </h5>

        </div>
  </div>

  <div href="#" class="flex flex-col flex-1 items-center  md:flex-row md:max-w-xl  dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 py-4 px-2 m-6">
      <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="{{ asset('images/stickers/luto.png')}}" alt="habitos">
      <div class="flex flex-col justify-between p-4 leading-normal">
          <h5 class="mb-2 text-2xl font-bold tracking-tight text-purple-300 dark:text-white">Lidar com o luto</h5>
      </div>
  </div>

  <div href="#" class="flex flex-col flex-1 items-center md:flex-row md:max-w-xl  dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 py-4 px-2 m-6">
    <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="{{ asset('images/stickers/autoconhecimento.png')}}" alt="habitos">
    <div class="flex flex-col justify-between p-4 leading-normal">
        <h5 class=" text-2xl font-bold tracking-tight text-purple-300 dark:text-white">Melhorar</h5>
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-purple-300 dark:text-white">foco</h5>

    </div>
  </div>

</div>

<!-----------------------------------Como funciona-------------------------------------------->
<div class="font-bold text-center text-4xl text-pink-400"> ... </div>
<div class="flex justify-center" id="como_funciona" class="mx-auto self-center">
  <img src="{{ asset('images/como_funciona.png')}}" >
</div>

<!----------------------------------------blog------------------------------------------------------>
<div class="font-bold text-center text-4xl text-pink-400"> ... </div>
<div class="m-4 p-6" id="blog">
  <div class="flex justify-around items-center mb-10"><!--flex superior-->
    <img src="images/depressao_blog.png" class="w-2/8 p-2">
    <!--card-->
  <div class="max-w-md bg-white dark:bg-gray-800 dark:border-gray-700">
      <a href="#">
          <img class="rounded-t-lg" src="/docs/images/blog/image-1.jpg" alt=""/>
      </a>
      <div class="p-5">
          <a href="#">
              <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-500 dark:text-white">Depressão na Adolescência: Você Não Está Sozinho</h5>
          </a>
          <p class="mb-3 font-normal text-gray-400 dark:text-gray-400">Dicas para entender e superar os momentos difíceis.</p>
          <div class="flex mt-4 md:mt-6">
            <a href="{{route('blog')}}" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-sky-300 rounded-lg hover:bg-sky-400 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" target="_blank">Leia mais</a>
          </div>
      </div>
    </div><!--card--> 
    
  </div><!--flex superior--> 

  <div class="flex justify-around">
    <!-----------------------------------card 1-----------------------------------------------------> 
      <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <a href="#">
            <img class="rounded-t-lg" src="/docs/images/blog/image-1.jpg" alt="" />
        </a>
        <div class="p-5">
            <a href="#">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-500 dark:text-white">Enchentes e Perdas: Superando o Trauma e Encontrando Força</h5>
            </a>
            <p class="mb-3 font-normal text-gray-400 dark:text-gray-400">Como lidar com o impacto emocional de desastres naturais e reconstruir sua vida.</p>
            <div class="flex mt-4 md:mt-6">
              <a href="{{route('blog')}}" target="_blank" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-sky-300 rounded-lg hover:bg-sky-400 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Leia mais</a>
            </div>
        </div>
      </div>
    <!----------------------------------card 2 -----------------------------------------------------> 
    
      <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <a href="#">
            <img class="rounded-t-lg" src="/docs/images/blog/image-1.jpg" alt="" />
        </a>
        <div class="p-5">
            <a href="#">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-500 dark:text-white">TDAH: Transforme Seu "Problema" em Superpoder</h5>
            </a>
            <p class="mb-3 font-normal text-gray-400 dark:text-gray-400">Dicas e técnicas para aproveitar o máximo do seu potencial</p>
            <div class="flex mt-4 md:mt-6">
              <a href="{{route('blog')}}" target="_blank" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-sky-300 rounded-lg hover:bg-sky-400 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Leia mais</a>
            </div>
        </div>
      </div>
   <!----------------------------------card 3 -----------------------------------------------------> 
      <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <a href="#">
            <img class="rounded-t-lg" src="/docs/images/blog/image-1.jpg" alt="" />
        </a>
        <div class="p-5">
            <a href="#">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-500 dark:text-white">Ansiedade: Como Lidar com a Pressão da Escola</h5>
            </a>
            <p class="mb-3 font-normal text-gray-400 dark:text-gray-400">Descubra estratégias para manter a calma e enfrentar os desafios do dia a dia.</p>
            <div class="flex mt-4 md:mt-6">
              <a href="{{route('blog')}}" target="_blank" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-sky-300 rounded-lg hover:bg-sky-400 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Leia mais</a>
            </div>
        </div>
      </div>
  </div>
</div><!--final div blog--> 

<!--------------------------------------Footer------------------------------------------------------>
<footer class="bg-pink-300  shadow dark:bg-gray-800">
  <div class="w-full mx-auto max-w-screen-xl p-4 md:flex md:items-center md:justify-between">
    <span class="text-sm text-slate-50 sm:text-center dark:text-gray-400">© 2024 <a href="#" class="hover:underline">Appoia</a>. Licença MIT.
  </span>
  <ul class="flex flex-wrap items-center mt-3 text-base font-medium text-slate-50 dark:text-gray-400 sm:mt-0">
      <li>
          <a href="#ajudar" class="hover:text-white me-4 md:me-6">Como podemos ajudar</a>
      </li>
      <li>
          <a href="#como_funciona" class="hover:text-slate-50 me-4 md:me-6">Como funciona</a>
      </li>
      <li>
        <a href="#blog" class="hover:text-slate-50 me-4 md:me-6">Blog</a>
      </li>
      <li>
        <a href="{{route('registerVoluntarioForm')}}" class=" font-bold hover:text-slate-50 me-4 md:me-6">Cadastro voluntário</a>
      </li>

      <li>
        <a href="{{route('registerSupervisorForm')}}" class=" font-bold hover:text-slate-50 me-4 md:me-6">Cadastro supervisor</a>
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