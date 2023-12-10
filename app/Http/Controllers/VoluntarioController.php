<?php

namespace App\Http\Controllers;
use App\Models\Voluntario;
use Illuminate\Http\Request;

class VoluntarioController extends Controller
{
    public function index(){
        //nome da view, nome do array que vai ser lido 
        return view ('voluntarios', ['voluntarios' => Voluntario::all()]); 
    }
}
