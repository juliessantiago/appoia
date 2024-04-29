<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VoluntarioController;
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\AssuntoController;
use App\Http\Controllers\ExpedienteController;
use App\Http\Controllers\FullCalendarController;
use Illuminate\Support\Facades\Route;

/*----------------------------Aluno autenticação--------------------*/ 
Route::prefix('aluno')->group(function () {
    Route::get('/login', [AlunoController::class, 'showLogin'])->name('loginAlunoForm'); 
    Route::post('/login/aluno', [AlunoController::class, 'loginAluno'])->name('loginAluno'); 
    Route::get('/dashboard', [AlunoController::class, 'dashboard'])->name('dashboardAluno')->middleware('auth:aluno');
});



/*------------------------------------------------------------------------------*/ 

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

//-------------------------------------Voluntários---------------------------------------------------------//
Route::get('/voluntarios', [VoluntarioController::class, 'index'])->name('allVoluntarios'); 
Route::get('/voluntario/{id}', [VoluntarioController::class, 'show'])->name('showVoluntario'); 
Route::post('/voluntario/{id}/update', [VoluntarioController::class, 'update'])->name('updateVoluntario'); 


//exibir todos os horários de expediente de determinado voluntário
Route::get('/voluntarioHorarios/{id}', [ExpedienteController::class, 'showHorarios'])->name('voluntarioHorarios'); 


Route::get('/assuntos',[AssuntoController::class, 'index'])->name('allAssuntos'); 
Route::get('/assunto/{id}', [AssuntoController::class, 'show'])->name('showAssunto'); 
//exibir todos os voluntários que atendem determinado assunto
Route::get('/assuntoVoluntarios/{id}', [AssuntoController::class, 'showVoluntarios'])->name('assuntoVoluntarios');


/*----------------------------------------------Calendário---------------------------------------*/ 
Route::controller(FullCalendarController::class)->group(function(){
    Route::get('fullcalendar/{id}', 'index');
    Route::post('fullcalendarAjax', 'ajax');
    Route::get('expedientes/{id}', 'expedientes');
});

Route::get('/alunos', [AlunoController::class, 'index']); 
require __DIR__.'/auth.php';
