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
    ];
    //exemplo: segunda, 09:00h
    //por padrão as consultas terão 1h de duração
    use HasFactory;
    public function voluntarios(){
        return $this->belongsToMany(Voluntario::class);
    }
}
