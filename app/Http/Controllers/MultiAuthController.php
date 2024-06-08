<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Voluntario;

class MultiAuthController extends Controller
{
    public function showLogin(){
        return view('multiauth/login'); 
    }

    public function multiAuth(Request $request){ //precisa de refatoração
        // dd(Auth::user()); 
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
                // auth()->guard('voluntario')->login(Voluntario::where('email', $dados['email'])->get()->first());
                $request->session()->regenerate(); 
                
                return redirect()->intended('dashboardVoluntario');
            }else{
                return redirect()->route('multilogin')->withErrors(['email' => 'Email ou senha incorretos, tente novamente!']); 
            }
        } elseif($request->tipo_usuario == 'supervisor'){
            if (auth()->guard('supervisor')->attempt(['email' => $dados['email'], 'password' => $dados['password']])) {
                return redirect()->route('dashboardSupervisor');
               
            }else{
                return redirect()->route('multilogin')->withErrors(['email' => 'Email ou senha incorretos, tente novamente!']); 
            }
        }
       
    }
}
