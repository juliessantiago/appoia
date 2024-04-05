<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Assunto;

class AssuntoController extends Controller
{
    public function index(){
        return view ('assuntos', ['assuntos' => Assunto::all()]); 
    }

    public function show($id){
        return view('assunto', ['assunto'=>Assunto::find($id)]);
    }

    public function showVoluntarios($id){
        return view('assuntoVoluntarios', ['assuntoVoluntarios' =>Assunto::find($id)->voluntarios]); 
    }
}
     