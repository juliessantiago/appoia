<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consulta extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', 
        'start', 
        'end', 
        'id_voluntario'
    ];

    public function voluntario(){//singular-> um horário pertence a um voluntário 
        return $this->belongsTo(Voluntario::class);
    }
}
