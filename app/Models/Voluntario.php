<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voluntario extends Model
{
    protected $fillable = [
        'nome', 
        'email', 
        'senha', 
        'cpf', 
        'telefone', 
        'tipo', 
        'universidade_id',
        'matricula'
    ];
    use HasFactory;
    // public function horarios(){
    //     return $this->belongsToMany(Horario::class, "horario_voluntario");
    // }
}
