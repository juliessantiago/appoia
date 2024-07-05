<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consulta extends Model
{
    use HasFactory;
    protected $fillable = [
        'status', 
        'start', 
        'end', 
        'id_voluntario', 
        'id_aluno',
    ];

    public function voluntario(){// singular -> uma consulta pertence a um voluntário
        return $this->belongsTo(Voluntario::class);
    }
    public function aluno(){ //uma consulta pertence a um aluno
        return $this->belongsTo(Aluno::class);
    }
}
