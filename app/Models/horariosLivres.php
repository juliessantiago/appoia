<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class horariosLivres extends Model
{
    protected $fillable = [
        'dia_semana', //segunda, terça, quarta, quinta, sexta
        'inicio_expediente', //horário
        'fim_expediente' //horário
    ];
    use HasFactory;
}
