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
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.Supervisor::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
        $supervisor = Supervisor::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'crp' => $request->crp,
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

    public function logout(){
        Auth::guard('supervisor')->logout(); 
        return redirect()->route('multilogin'); 
    }
}
