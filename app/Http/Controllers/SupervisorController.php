<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Supervisor;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Hash;


class SupervisorController extends Controller
{
    public function dashboard(){
        return view('supervisor/dashboard'); 
    }

    public function showRegister(){
        return view ('supervisor/register'); 
    }
    public function registerSupervisor(Request $request){
        // dd($request); 
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:supervisors'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
        // dd($request); 
        $supervisor = Supervisor::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'crp' => $request->crp,
            'universidade_id' =>$request->universidade
        ]);
        event(new Registered($supervisor));

        // $this->dispatchBrowserEvent('notificaNovaConta');
        session()->flash('evento', 'notificaNovaConta');
        return redirect()->route('multilogin')->with('mensagem',  'Conta criada com sucesso!');  

    }

    public function showAssuntos(){ //mostra página com todas as opções de assuntos
        return view('supervisor/paginaAssuntos'); 
    }
    public function showAutorizacoes(){ //mostra página com todas as opções de assuntos
        return view('supervisor/paginaAutorizacoes'); 
    }

    public function showVoluntarios(){ //mostra página com todas as opções de voluntarios
        return view('supervisor/paginaVoluntarios'); 
    }

    public function showDetalhesVoluntario($id){ //mostra página que carrega componentes livewire com detalhes de voluntario
        return view('supervisor/detalhesVoluntario', ["id" => $id]); 
        //1)no componente getVoluntarios, há na tabela a opção de visualizar detalhes do voluntário
        //quando clico no link, chamo a rota detalhesVoluntario/{id}, passando como parametro o id do voluntário
        //2) rota chama (através desse método aqui) a view detalhesVoluntario.blade, nela eu chamo os componentes necessários, passando o id do voluntário
        //3) No componente livewire exibo as informações de acordo com o id passado. Eles também são usados na dashboard de voluntário
    }

    public function showConsultas(){ //mostra página com todas as opções de voluntarios
        return view('supervisor/paginaConsultas'); 
    }

    public function logout(){
        Auth::guard('supervisor')->logout(); 
        return redirect()->route('multilogin'); 
    }
}
