<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Supervisor extends Authenticatable
{
    use HasFactory;
    protected $fillable = [
        'name', 
        'email', 
        'crp'
    ]; 
    
    protected $hidden = [
        'password'
    ];
    public function voluntarios(){
        return $this->hasMany(Voluntario::class, 'id_supervisor'); 
    }
 

    public function notificacoes(){
        return $this->morphMany(Notificacao::class, 'notifiable'); 
        //Model Notificacao vai armazenar as várias entradas, guardando id e tipo 
    }
    
}
