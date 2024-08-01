<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;



class Voluntario extends Authenticatable
{
    use HasFactory, HasApiTokens, Notifiable;
    protected $fillable = [
        'name', 
        'email', 
        'password', 
        'cpf', 
        'telefone', 
        // 'universidade_id',
        'matricula', 
        'supervisor_id'
    ];

    protected $hidden = [
        'password',
    ];

    use HasFactory;
    public function assuntos(){
        return $this->belongsToMany(Assunto::class);
    }
    public function horarios(){
        return $this->hasMany(Expediente::class, 'id_voluntario'); 
    }
 
    public function consultas(){ //voluntário pode ter várias consultas
        return $this->hasMany(Consulta::class, 'id_voluntario'); 
    }

    public function notificacoes(){
        return $this->morphMany(Notificacao::class, 'notifiable'); 
        //Model Notificacao vai armazenar as várias entradas, guardando id e tipo 
    }
    
}
