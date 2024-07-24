<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notificacao extends Model
{
    use HasFactory;

    protected $fillable = ['mensagem', 'lida']; 
    public function notifiable(){ //determina a relação polimórfica
        return $this->morphTo(); //modelo Notificacao pode pertencer a qualquer model que tenha essa relação
    }

    

}
