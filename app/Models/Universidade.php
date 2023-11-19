<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Universidade extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome', 
        'cidade', 
        'logradouro', 
        'numero', 
        'bairro', 
        'cod_mec', 
        'cat_adm', //pública ou privada
        'org_acad', //faculdade, universidade ou instituto federal
        'credenciamento', //presencial ou EAD
    ];

    public function pessoas(){
        return $this->hasMany(Pessoa::class);
    }
    
}
