<?php

use App\Http\Controllers\AlunoController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\VoluntarioController;
use App\Http\Controllers\PessoaController;

use Illuminate\Support\Facades\Route;

/*Web Routes*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/showLogin', [LoginController::class, 'showLoginForm']); 
Route::get('/showCadastro', [LoginController::class, 'showCadastro']);

Route::get('/voluntarios', [VoluntarioController::class, 'index']); 
Route::get('/showCreate', [PessoaController::class, 'showCreate']);
Route::post('/storePessoa', [PessoaController::class, 'store']); 

Route::get('/alunos', [AlunoController::class, 'index']); 