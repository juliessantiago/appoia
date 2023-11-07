<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voluntario extends Pessoa
{
    protected $fillable = [
        'matricula',
    ];
    use HasFactory;
}
