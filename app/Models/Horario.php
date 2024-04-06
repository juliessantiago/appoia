<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    use HasFactory;
    protected $fillable = [
        'diaSemana', //segunda, terça, quarta, quinta, sexta
        'inicioExpediente', 
        'fimExpediente',
        'id_voluntario',
    ];
    //exemplo: segunda, 09:00h
    //por padrão as consultas terão 1h de duração
    use HasFactory;
    public function voluntario(){//singular-> um horário pertence a um voluntário 
        return $this->belongsTo(Voluntario::class);
    }
}
