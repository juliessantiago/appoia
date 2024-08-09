<?php

namespace App\Livewire;
use Livewire\Component;
use Livewire\WithFileUploads;

class UploadAutorizacao extends Component
{
    use WithFileUploads;

    public $photo;
    public function updatedPhoto(){
        $this->validate([
            'photo' => 'image|max:1024',
        ]);
    }

    public function save(){
        $this->photo->store('photos');
    }
}
