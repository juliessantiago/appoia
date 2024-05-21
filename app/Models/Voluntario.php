<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Voluntario extends Authenticatable
{
    protected $fillable = [
        'name', 
        'email', 
        'password', 
        'cpf', 
        'telefone', 
        // 'universidade_id',
        'matricula', 
        // 'supervisor_id'
    ];
    use HasFactory;
    public function assuntos(){
        return $this->belongsToMany(Assunto::class);
    }
    public function horarios(){
        return $this->hasMany(Expediente::class, 'id_voluntario'); 
    }
 
    public function consultas(){
        return $this->hasMany(Consulta::class, 'id_voluntario'); 
    }
}
