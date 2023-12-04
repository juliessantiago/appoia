<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    use HasFactory;
    protected $fillable = [ //filable é usado para especificar quais colunas na tabela podem 
        //ser preenchidas em massa, todas de uma vez só 
        'nome', 
        'email', 
        'senha', 
        'cpf', 
        'telefone', 
        'tipo', 
        'universidade_id'
    ];
    // public function universidade(){
    //     return $this->belongsTo(Universidade::class);
    // }
}
