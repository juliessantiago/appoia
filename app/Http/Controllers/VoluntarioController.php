<?php

namespace App\Http\Controllers;
use App\Models\Voluntario;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class VoluntarioController extends Controller
{
    public function index(){
        //nome da view, nome do array que vai ser lido 
        return view ('voluntarios', ['voluntarios' => Voluntario::all()]); 
    }

    public function show($id){
        return view('voluntario', ['voluntario' => Voluntario::find($id)]); 
    }
    public function update(Request $request, $id){
        $updateVoluntario = $request->all(); 
        $voluntario = Voluntario::find($id); 
        $voluntario->nome = $updateVoluntario['nome']; 
        $voluntario->email = $updateVoluntario['email']; 
        // if (!voluntario->save(){
         
        // })
        return(redirect('voluntarios')); 
    }

   
}
