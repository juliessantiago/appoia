<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    protected $fillable = [
        'nome', 
        'email', 
        'senha', 
        'data_nascimento', 
        'responsavel', 
        'escola_id', 
        'cidade',
        'telefone', 
        'rua', 
        'numero', 
        'bairro', 
        'cidade', 
        'estado',
        'sexo'
    ];
    use HasFactory;
}
