<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pessoa;
use App\Models\Voluntario;
use App\Models\Supervisor;

class PessoaController extends Controller
{
    public function showCreate(){
        return view('createPessoa'); 
    }
    public function store(Request $request){
        // dd($request->tipo); 
        $array= $request->all(); 
        if ($request->input('tipo') == 'vol') {
           $voluntario = new Voluntario; 
           $voluntario->fill($array); 
           if($voluntario->save()){
                dd('salvou'); 
           }else{
                dd('erro'); 
           }
        }else{
            $supervisor = new Supervisor; 
            $supervisor->fill($array); 
            if($supervisor->save()){
                dd('salvou'); 
           }else{
                dd('erro'); 
           }
        }
    }
}
