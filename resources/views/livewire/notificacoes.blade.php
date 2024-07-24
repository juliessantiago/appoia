<div class="">
    <a href="#" class="flex justify-around" wire:click="$dispatch('exibeNotificacoes', { notificacoes: {{ $notificacoes }} })">
         <img  src="{{ asset('images/icons/bell.png')}}" class="p-4 z-0" alt="notificacoes" />
         <p class=" text-sky-400 z-50 text-lg font-extrabold -ml-2">{{$notificacoes->count()}}</p>
    </a>
</div>
