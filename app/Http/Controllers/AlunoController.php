<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluno;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Auth\Events\Registered;




class AlunoController extends Controller
{
    public function index(){ //método deve sair daqui pois não é uma ação que Aluno fará 
        return view ('alunos', ['alunos' => Aluno::all()]); 
    }

   
    public function dashboard(){
        return view('aluno/dashboard'); 
    }

    public function showPreMeeting(){
        return view('aluno/pre-meeting'); 
    }
    
    public function logout(){
        Auth::guard('aluno')->logout(); 
        return redirect()->route('multilogin'); 
    }

    public function showRegister(){
        return view ('aluno/register'); 
    }

    public function registerAluno(Request $request){ //alterar nome para store
        // dd($request); 
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.Aluno::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
        $aluno = Aluno::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'responsavel' => $request->responsavel,
            'id_escola' => $request->escola,
            'sexo' => $request->sexo,
            'data_nascimento' => $request->data_nascimento,
        ]);

        event(new Registered($aluno));

        return redirect()->route('multilogin');  
        //Enviar mensagem de sucesso de conta criada!! 
    }
}
