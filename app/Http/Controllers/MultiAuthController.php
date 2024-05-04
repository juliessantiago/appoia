<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MultiAuthController extends Controller
{
    public function showLogin(){
        return view('multiauth/login'); 
    }

    public function multiAuth(Request $request){ //precisa de refatoração
        // dd($request); 
        $dados = $request->all();
        if($request->tipo_usuario == 'aluno'){
            if (auth()->guard('aluno')->attempt(['email' => $dados['email'], 'password' => $dados['password']])) {
                return redirect()->route('dashboardAluno');
                // dd('dados corretos'); 
            }else{
                return redirect()->route('multilogin')->withErrors(['email' => 'Email ou senha incorretos, tente novamente!']); 
            }
        }elseif ($request->tipo_usuario == 'voluntario') {
            if (auth()->guard('voluntario')->attempt(['email' => $dados['email'], 'password' => $dados['password']])) {
                return redirect()->route('dashboardAluno');
                // dd('dados corretos'); 
            }else{
                return redirect()->route('multilogin')->withErrors(['email' => 'Email ou senha incorretos, tente novamente!']); 
            }
        } elseif($request->tipo_usuario == 'supervisor'){
            if (auth()->guard('supervisor')->attempt(['email' => $dados['email'], 'password' => $dados['password']])) {
                return redirect()->route('dashboardAluno');
                // dd('dados corretos'); 
            }else{
                return redirect()->route('multilogin')->withErrors(['email' => 'Email ou senha incorretos, tente novamente!']); 
            }
        }
       
    }
}
