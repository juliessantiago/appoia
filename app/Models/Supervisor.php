<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Supervisor extends Authenticatable
{
    protected $fillable = [
        'nome', 
        'email', 
        'senha', 
        'cpf', 
        'telefone', 
        'tipo', 
        'universidade_id',
        'CRP'
    ]; 
    use HasFactory;
}
