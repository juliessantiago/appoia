<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Aluno extends Authenticatable
{
    use HasFactory, HasApiTokens, Notifiable;
    protected $guard = 'aluno'; 
 
    protected $fillable = [
        'name', 
        'email', 
        'status',
        'data_nascimento', 
        'id_escola', 
        'sexo', 
        'password', 
        'responsavel'
    ];

    protected $hidden = [
        'password'
    ];

    public function consultas(){ //aluno pode ter várias consultas
        return $this->hasMany(Consulta::class, 'id_aluno'); 
    }

    public function notificacoes(){
        return $this->morphMany(Notificacao::class, 'notifiable'); 
        //Model Notificacao vai armazenar as várias entradas, guardando id e tipo 
    }
    
}
