<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Universidade extends Model
{
    use HasFactory;
    protected $fillable = [
        'sigla',
        'nome', 
        'cidade', 
        'codigo' //'código da instituição no MEC
    ];

    public function supervisores(){
        return $this->hasMany(Supervisor::class, 'id_universidade');
    }
    
}
