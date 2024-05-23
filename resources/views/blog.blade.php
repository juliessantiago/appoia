<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appoia - Você não está sozinho</title>
    @vite([
        'resources/css/input.css', 
        'resources/js/app.js'
        ])
</head>
<body class="bg-gray-100 text-gray-8=500">
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

    <header class="relative bg-cover bg-center h-64" style="background-image: url('caminho/para/sua/imagem.jpg');">
        <div class="absolute inset-0 bg-violet-400 opacity-50"></div>
        <div class="absolute inset-0 flex flex-col items-center justify-center text-white">
            <h1 class="text-4xl font-bold">Appoia</h1>
            <p class="text-xl">Blog</p>
        </div>
    </header>

    <div class="container mx-auto mt-8">
    
        <div class="bg-white p-12 rounded-lg mb-6" id="ansiedade">
            <h2 class="text-2xl font-bold mb-10 text-center">Ansiedade: Como Lidar com a Pressão da Escola e Redes Sociais</h2>

            <img src="https://media.starlightcms.io/workspaces/pague-menos/portal-sempre-bem/optimized/istock-1281237072-jghivsvhyt.jpeg" class="max-w-screen-md mx-auto pb-10">

            <p class="text-gray-700 text-justify">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer consectetur enim id varius
                posuere. Nulla mollis volutpat egestas. Donec suscipit vitae ipsum vulputate convallis. Sed
                 nibh orci, dictum ut rhoncus sit amet, congue in mauris. Nulla et ante sagittis, mollis dolor 
                 congue, lacinia arcu. Nulla facilisi. Nullam id varius magna, sollicitudin pretium tellus.
                  Pellentesque id leo varius, tincidunt dui sed, imperdiet leo.
            </p>
            <p class="text-gray-700 text-justify">
                Nunc consequat urna arcu, at ullamcorper quam dapibus in. Praesent sed urna enim. Nam 
                tristique quam magna. Donec arcu sem, ullamcorper venenatis massa vel, porta porttitor dolor.
                 Maecenas molestie euismod quam, non semper tellus iaculis non. Aliquam erat volutpat. 
                 Maecenas tristique sollicitudin dolor vel ullamcorper. Pellentesque ullamcorper orci viverra 
                 commodo placerat. Nulla sed enim est. Nunc vitae sagittis lacus. Vivamus quis nibh dictum, 
                 varius mi sed, efficitur risus. Donec vestibulum quis nunc eget congue. Fusce non mollis nisl, 
                 eu luctus erat. Proin porttitor vulputate dui, sed mattis leo fermentum a. Donec hendrerit posuere 
                 congue.  
            </p>
            <p class="text-gray-700 text-justify">
                Maecenas quis erat sed augue sollicitudin pellentesque eu aliquet velit. Vivamus ornare purus
                 ac elit aliquet tincidunt. Vestibulum porta ut massa vel hendrerit. Maecenas interdum, ex eget
                  interdum pellentesque, justo augue ornare nulla, ut accumsan lorem nunc nec elit. Mauris 
                  molestie odio sit amet augue posuere pulvinar. Sed eget pellentesque felis. Pellentesque sapien 
                  sem, porta vitae quam porta, elementum tempor elit. In vitae metus finibus, efficitur sapien vitae,
                   accumsan turpis. Nulla facilisi. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras
                    pharetra semper risus non fermentum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Aliquam ante nisl, vulputate et dignissim ac, pulvinar vitae nibh. Aenean a tincidunt sapien. Donec
                     et elit vitae justo rutrum tristique quis fermentum dui. 
            </p>
            <!-- Conteúdo do post -->
        </div>

        <div class="bg-white p-12 rounded-lg mb-6" id="depressao">
            <h2 class="text-2xl font-bold mb-10 text-center ">Depressão na Adolescência</h2>
            <img src="https://www.massagefremantle.com.au/img/anxiety-and-depression.jpg" class="max-w-screen-md mx-auto pb-10">

            <p class="text-gray-700 text-justify">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer consectetur enim id varius
                posuere. Nulla mollis volutpat egestas. Donec suscipit vitae ipsum vulputate convallis. Sed
                 nibh orci, dictum ut rhoncus sit amet, congue in mauris. Nulla et ante sagittis, mollis dolor 
                 congue, lacinia arcu. Nulla facilisi. Nullam id varius magna, sollicitudin pretium tellus.
                  Pellentesque id leo varius, tincidunt dui sed, imperdiet leo.
            </p>
            <p class="text-gray-700 text-justify">
                Nunc consequat urna arcu, at ullamcorper quam dapibus in. Praesent sed urna enim. Nam 
                tristique quam magna. Donec arcu sem, ullamcorper venenatis massa vel, porta porttitor dolor.
                 Maecenas molestie euismod quam, non semper tellus iaculis non. Aliquam erat volutpat. 
                 Maecenas tristique sollicitudin dolor vel ullamcorper. Pellentesque ullamcorper orci viverra 
                 commodo placerat. Nulla sed enim est. Nunc vitae sagittis lacus. Vivamus quis nibh dictum, 
                 varius mi sed, efficitur risus. Donec vestibulum quis nunc eget congue. Fusce non mollis nisl, 
                 eu luctus erat. Proin porttitor vulputate dui, sed mattis leo fermentum a. Donec hendrerit posuere 
                 congue.  
            </p>
            <p class="text-gray-700 text-justify">
                Maecenas quis erat sed augue sollicitudin pellentesque eu aliquet velit. Vivamus ornare purus
                 ac elit aliquet tincidunt. Vestibulum porta ut massa vel hendrerit. Maecenas interdum, ex eget
                  interdum pellentesque, justo augue ornare nulla, ut accumsan lorem nunc nec elit. Mauris 
                  molestie odio sit amet augue posuere pulvinar. Sed eget pellentesque felis. Pellentesque sapien 
                  sem, porta vitae quam porta, elementum tempor elit. In vitae metus finibus, efficitur sapien vitae,
                   accumsan turpis. Nulla facilisi. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras
                    pharetra semper risus non fermentum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Aliquam ante nisl, vulputate et dignissim ac, pulvinar vitae nibh. Aenean a tincidunt sapien. Donec
                     et elit vitae justo rutrum tristique quis fermentum dui. 
            </p>
            <!-- Conteúdo do post -->
        </div>

        <div class="bg-white p-12 rounded-lg mb-6" id="tdah">
            <h2 class="text-2xl font-bold mb-10 text-center ">TDAH: Transforme Seu "Problema" em Superpoder</h2>
            <img src="https://esuppsicologia.com.br/wp-content/uploads/2023/06/shutterstock-1846354129_ai1das.png" class="max-w-screen-md mx-auto pb-10">

            <p class="text-gray-700 text-justify">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer consectetur enim id varius
                posuere. Nulla mollis volutpat egestas. Donec suscipit vitae ipsum vulputate convallis. Sed
                 nibh orci, dictum ut rhoncus sit amet, congue in mauris. Nulla et ante sagittis, mollis dolor 
                 congue, lacinia arcu. Nulla facilisi. Nullam id varius magna, sollicitudin pretium tellus.
                  Pellentesque id leo varius, tincidunt dui sed, imperdiet leo.
            </p>
            <p class="text-gray-700 text-justify">
                Nunc consequat urna arcu, at ullamcorper quam dapibus in. Praesent sed urna enim. Nam 
                tristique quam magna. Donec arcu sem, ullamcorper venenatis massa vel, porta porttitor dolor.
                 Maecenas molestie euismod quam, non semper tellus iaculis non. Aliquam erat volutpat. 
                 Maecenas tristique sollicitudin dolor vel ullamcorper. Pellentesque ullamcorper orci viverra 
                 commodo placerat. Nulla sed enim est. Nunc vitae sagittis lacus. Vivamus quis nibh dictum, 
                 varius mi sed, efficitur risus. Donec vestibulum quis nunc eget congue. Fusce non mollis nisl, 
                 eu luctus erat. Proin porttitor vulputate dui, sed mattis leo fermentum a. Donec hendrerit posuere 
                 congue.  
            </p>
            <p class="text-gray-700 text-justify">
                Maecenas quis erat sed augue sollicitudin pellentesque eu aliquet velit. Vivamus ornare purus
                 ac elit aliquet tincidunt. Vestibulum porta ut massa vel hendrerit. Maecenas interdum, ex eget
                  interdum pellentesque, justo augue ornare nulla, ut accumsan lorem nunc nec elit. Mauris 
                  molestie odio sit amet augue posuere pulvinar. Sed eget pellentesque felis. Pellentesque sapien 
                  sem, porta vitae quam porta, elementum tempor elit. In vitae metus finibus, efficitur sapien vitae,
                   accumsan turpis. Nulla facilisi. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras
                    pharetra semper risus non fermentum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Aliquam ante nisl, vulputate et dignissim ac, pulvinar vitae nibh. Aenean a tincidunt sapien. Donec
                     et elit vitae justo rutrum tristique quis fermentum dui. 
            </p>
            <!-- Conteúdo do post -->
        </div>

 
    </div>

    <footer class="bg-violet-400 text-white text-center p-4 mt-8">
        &copy; 2024 Appoia. Licença MIT
    </footer>

</body>
</html>
