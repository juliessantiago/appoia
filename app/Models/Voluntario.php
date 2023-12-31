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
        // 'universidade_id',
        'matricula', 
        // 'supervisor_id'
    ];
    use HasFactory;
    public function assuntos(){
        return $this->belongsToMany(Assunto::class);
    }
}
