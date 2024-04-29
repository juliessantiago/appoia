<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluno;

class AlunoController extends Controller
{
    public function index(){ //método deve sair daqui pois não é uma ação que Aluno fará 
        return view ('alunos', ['alunos' => Aluno::all()]); 
    }

    public function showLogin(){
        return view('aluno/login_aluno'); 
    }
    public function loginAluno(Request $request){
        $dados = $request->all();
        if (auth()->guard('aluno')->attempt(['email' => $dados['email'], 'password' => $dados['password']])) {
            // return redirect()->route('dashboardAdmin');
            dd('dados corretos'); 
        }else{
            return back()->withErrors(['email' => 'Email ou senha incorretos, tente novamente!']); 
        }
    }
}
