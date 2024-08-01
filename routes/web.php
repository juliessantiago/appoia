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
Route::get('/preSignUp', [MultiAuthController::class, 'showPreSignUp'])->name('preSignUp'); 

/*--------------------------------------Blog-------------------------------------*/ 
Route::get('/blog', function () {
    return view('blog');
})->name('blog');
/*-------------------------------------MultiAuth------------------------------*/ 
Route::get('/multilogin', [MultiAuthController::class, 'showLogin'])->name('multilogin'); 
Route::post('/multiAuth', [MultiAuthController::class, 'multiAuth'])->name('multiAuth'); 

/*--------------------Aluno - todas as rotas acessíveis por aluno -----------*/ 
Route::prefix('aluno')->middleware('auth:aluno')->group(function () {
    Route::get('/dashboard', [AlunoController::class, 'dashboard'])->name('dashboardAluno');
    Route::get('/assuntos',[AssuntoController::class, 'index'])->name('allAssuntos'); 
    Route::get('/assuntoVoluntarios/{id}', [AssuntoController::class, 'showVoluntarios'])->name('assuntoVoluntarios');
    Route::get('/voluntarioHorarios/{id}', [ExpedienteController::class, 'showHorarios'])->name('voluntarioHorarios'); 
    Route::get('/voluntarios', [VoluntarioController::class, 'index'])->name('allVoluntarios'); 
    Route::get('/preMeeting', [AlunoController::class, 'showPreMeeting'])->name('preMeeting'); 
    Route::get('/logout', [AlunoController::class, 'logout'])->name('aluno.logout');
});
Route::get('aluno/register', [AlunoController::class, 'showRegister'])->name('registerAlunoForm'); 
Route::post('aluno/register', [AlunoController::class, 'registerAluno'])->name('registerAluno'); 


/*---------------------Calendário para marcação de consultas------------------------*/ 
Route::controller(FullCalendarController::class)->group(function(){
    Route::get('fullcalendar/{id}', 'index')->middleware('auth:aluno');
    Route::post('fullcalendarAjax', 'ajax')->middleware('auth:aluno');
    Route::get('expedientes/{id}', 'expedientes')->middleware('auth:aluno');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');


// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

/*-------------------------------------Voluntários------------------------------------------*/

Route::prefix('voluntario')->middleware('auth:voluntario')->group(function () {
    Route::post('/voluntario/{id}/update', [VoluntarioController::class, 'update'])->name('updateVoluntario'); 
    Route::get('/voluntario/{id}', [VoluntarioController::class, 'show'])->name('showVoluntario'); 
    Route::get('/dashboard', [VoluntarioController::class, 'dashboard'])->name('dashboardVoluntario');
    Route::get('/logout', [VoluntarioController::class, 'logout'])->name('voluntario.logout');
    Route::get('/voluntarioAssuntos/{id}', [VoluntarioController::class, 'showAssuntos'])->name('voluntarioAssuntos'); 
    Route::get('/preMeetingVoluntario/{id}', [VoluntarioController::class, 'showPreMeeting'])->name('preMeetingVoluntario'); 

});

Route::get('voluntario/register', [VoluntarioController::class, 'showRegister'])->name('registerVoluntarioForm'); 
Route::post('voluntario/register', [VoluntarioController::class, 'registerVoluntario'])->name('registerVoluntario'); 



/*-------------------------------------Supervisores---------------------------------------*/ 
Route::prefix('supervisor')->middleware('auth:supervisor')->group(function () {
    Route::get('/dashboard', [SupervisorController::class, 'dashboard'])->name('dashboardSupervisor'); 
    Route::get('/logout', [SupervisorController::class, 'logout'])->name('supervisor.logout');
});
Route::get('supervisor/register', [SupervisorController::class, 'showRegister'])->name('registerSupervisorForm'); 
Route::post('supervisor/register', [SupervisorController::class, 'registerSupervisor'])->name('registerSupervisor'); 

/*----------------------------------------Assuntos--------------------------------------------*/ 
Route::get('/assunto/{id}', [AssuntoController::class, 'show'])->name('showAssunto'); 
//exibir todos os voluntários que atendem determinado assunto

Route::get('/alunos', [AlunoController::class, 'index']); 
require __DIR__.'/auth.php';
