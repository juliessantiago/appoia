<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluno;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Auth\Events\Registered;
use Carbon\Carbon; 

class AlunoController extends Controller
{
    public function index(){ //método deve sair daqui pois não é uma ação que Aluno fará 
        return view ('alunos', ['alunos' => Aluno::all()]); 
    }

   
    public function showDashboard(){
        // dd(Auth::user()->name); 
        if(Auth::user()->status == 0){
            return view('aluno/paginaAutorizacao'); 
        }else{
            return view('aluno/dashboard'); 
        }
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
        $status = ''; 
        $request->validate([
            'name' => ['required', 'string', 'max:200'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:alunos'],
            'data_nascimento' => ['required'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]); 

        $nascimento = (Carbon::create($request->data_nascimento)->format('Y-m-d')); 
        $hoje = Carbon::now(); 
     
        $hoje->diffInYears($nascimento) < 18 ?  $status = false :   $status = true; 
        $aluno = Aluno::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'responsavel' => $request->responsavel,
            'id_escola' => $request->escola,
            'status' => $status, 
            'sexo' => $request->sexo,
            'data_nascimento' => $request->data_nascimento,
        ]);

    //    dd($aluno); 
        event(new Registered($aluno));
        return redirect()->route('multilogin')->with('mensagem',  'Conta criada com sucesso!');  
    }
}
