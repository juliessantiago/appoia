<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VoluntarioController;
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\AssuntoController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/dashboard', 'VoluntarioController@index')->middleware('auth', 'verified');
//rotas referentes ao usuário administrativo 
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/voluntarios', [VoluntarioController::class, 'index'])->name('allVoluntarios'); 
Route::get('/voluntario/{id}', [VoluntarioController::class, 'show'])->name('showVoluntario'); 
Route::post('/voluntario/{id}/update', [VoluntarioController::class, 'update'])->name('updateVoluntario'); 

Route::get('/assuntos',[AssuntoController::class, 'index'])->name('allAssuntos'); 
Route::get('/assunto/{id}', [AssuntoController::class, 'show'])->name('showAssunto'); 
Route::get('/assuntoVoluntarios/{id}', [AssuntoController::class, 'showVoluntarios'])->name('assuntoVoluntarios');

Route::get('/alunos', [AlunoController::class, 'index']); 
require __DIR__.'/auth.php';
