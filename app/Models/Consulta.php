<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consulta extends Model
{
    use HasFactory;
    protected $fillable = [
        'status', //pendente, autorizada, disponível, realizada, cancelada, ausente
        'dia', 
        'start', 
        'end', 
        'link',
        'id_voluntario', 
        'id_aluno',
    ];

    public function voluntario(){// singular -> uma consulta pertence a um voluntário
        return $this->belongsTo(Voluntario::class, 'id_voluntario');
    }
    public function aluno(){ //uma consulta pertence a um aluno
        return $this->belongsTo(Aluno::class, 'id_aluno');
    }
}
