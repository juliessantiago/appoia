<?php

namespace App\Livewire;
use Livewire\Component;
use Illuminate\Support\Facades\Storage;

class DownloadAutorizacao extends Component
{
    public function download()
    {
        $filePath = 'autorizacao_appoia.pdf'; // Caminho do arquivo
        return Storage::download($filePath, 'autorizacao.pdf');
    }

    public function render()
    {
        return view('livewire.download-autorizacao');
    }
}
