<?php

namespace App\Http\Controllers;
use App\Models\Voluntario;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Hash;


class VoluntarioController extends Controller
{
    public function index(){
        //nome da view, nome do array que vai ser lido 
        return view ('voluntarios', ['voluntarios' => Voluntario::all()]); 
    }

    public function show($id){
        return view('voluntario', ['voluntario' => Voluntario::find($id)]); 
    }

    public function showRegister(){
        return view ('voluntario/register'); 
    }

    public function registerVoluntario(Request $request){
        // dd($request); 
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.Voluntario::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
        $voluntario = Voluntario::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'cpf' => $request->cpf,
            'matricula' => $request->matricula,
            'telefone' => $request->telefone,
        ]);

        event(new Registered($voluntario));

        // $this->dispatchBrowserEvent('notificaNovaConta');
        session()->flash('evento', 'notificaNovaConta');
        return redirect()->route('multilogin');  
        //Enviar mensagem de sucesso de conta criada!! 
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

    public function dashboard(){
        // dd(Auth::user()); 
        return view('voluntario/dashboard'); 
    }
    public function showPreMeeting(){
        return view ('voluntario/preMeeting'); 
    }
    
    public function logout(){
        Auth::guard('voluntario')->logout(); 
        return redirect()->route('multilogin'); 
    }
   
}
