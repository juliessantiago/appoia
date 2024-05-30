<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VoluntarioController;
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\SupervisorController;
use App\Http\Controllers\AssuntoController;
use App\Http\Controllers\ExpedienteController;
use App\Http\Controllers\FullCalendarController;
use App\Http\Controllers\MultiAuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

/*--------------------------------------Blog---------------------------------------------------------*/ 
Route::get('/blog', function () {
    return view('blog');
})->name('blog');
/*-------------------------------------MultiAuth------------------------------*/ 
Route::get('/multilogin', [MultiAuthController::class, 'showLogin'])->name('multilogin'); 
Route::post('/multiAuth', [MultiAuthController::class, 'multiAuth'])->name('multiAuth'); 

/*-----------------------------------------Aluno-------------------------------*/ 
Route::prefix('aluno')->group(function () {
    Route::get('register', [AlunoController::class, 'showRegister'])->name('registerAlunoForm'); 
    Route::post('register', [AlunoController::class, 'registerAluno'])->name('registerAluno'); 
    Route::get('/dashboard', [AlunoController::class, 'dashboard'])->name('dashboardAluno')->middleware('auth:aluno');
    Route::get('/logout', [AlunoController::class, 'logout'])->name('aluno.logout')->middleware('auth:aluno');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

/*-------------------------------------Voluntários------------------------------------------*/
//adicionar prefix! 
Route::get('/voluntarios', [VoluntarioController::class, 'index'])->name('allVoluntarios'); 
Route::get('/voluntario/{id}', [VoluntarioController::class, 'show'])->name('showVoluntario'); 
Route::post('/voluntario/{id}/update', [VoluntarioController::class, 'update'])->name('updateVoluntario'); 
Route::get('/dashboardVoluntario', [VoluntarioController::class, 'dashboard'])->name('dashboardVoluntario')->middleware('auth:voluntario'); 
Route::get('/logout', [VoluntarioController::class, 'logout'])->name('voluntario.logout')->middleware('auth:voluntario');

//exibir todos os horários de expediente de determinado voluntário
Route::get('/voluntarioHorarios/{id}', [ExpedienteController::class, 'showHorarios'])->name('voluntarioHorarios'); 
Route::get('/voluntarioAssuntos/{id}', [VoluntarioController::class, 'showAssuntos'])->name('voluntarioAssuntos'); 

/*-------------------------------------Supervisores---------------------------------------*/ 
Route::get('/dashboardSupervisor', [SupervisorController::class, 'dashboard'])->name('dashboardSupervisor'); 



/*----------------------------------------Assuntos--------------------------------------------*/ 
Route::get('/assuntos',[AssuntoController::class, 'index'])->name('allAssuntos'); 
Route::get('/assunto/{id}', [AssuntoController::class, 'show'])->name('showAssunto'); 
//exibir todos os voluntários que atendem determinado assunto
Route::get('/assuntoVoluntarios/{id}', [AssuntoController::class, 'showVoluntarios'])->name('assuntoVoluntarios');


/*----------------------------------------Calendário---------------------------------------------*/ 
Route::controller(FullCalendarController::class)->group(function(){
    Route::get('fullcalendar/{id}', 'index');
    Route::post('fullcalendarAjax', 'ajax');
    Route::get('expedientes/{id}', 'expedientes');
});


Route::get('/alunos', [AlunoController::class, 'index']); 
require __DIR__.'/auth.php';
