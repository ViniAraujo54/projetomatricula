<?php

use App\Http\Controllers\CursoController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfessorController;
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\EnderecoController;
use App\Http\Controllers\MatriculaController;
use App\Http\Controllers\TurmaController;
use App\Http\Controllers\ResponsavelController;

Route::get('/', function () {
    return view('welcome');
});

// Rota para exibir a página de cadastro do aluno
Route::get('/cadastro', function () {
    return view('cadastro'); // Certifique-se de criar a view "cadastro_aluno.blade.php"
})->name('cadastro');

Route::get('/comprovante', function () {
    return view('comprovante'); // Certifique-se de criar a view "comprovante.blade.php"
})->name('comprovante');

Route::get('/curso', function() {
    return view('curso');
})->name('curso');

Route::get('/cursos/create', function() {
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/curso/store', [CursoController::class, 'store'])->name('curso.store');
    Route::get('/curso/create', [CursoController::class, 'create'])->name('curso.create');
    Route::get('/curso/show', [CursoController::class, 'show'])->name('curso.show');
    Route::get('/curso/edit', [CursoController::class, 'edit'])->name('curso.edit');
    Route::put('/curso/update', [CursoController::class, 'update'])->name('curso.update');
    Route::delete('/curso/destroy', [CursoController::class, 'destroy'])->name('curso.destroy');

    Route::get('/aluno/store', [AlunoController::class, 'store'])->name('aluno.store');
    Route::get('//aluno', [AlunoController::class, 'create'])->name('aluno.create');
    Route::get('/aluno/show', [AlunoController::class, 'show'])->name('aluno.show');
    Route::get('/aluno/edit', [AlunoController::class, 'edit'])->name('aluno.edit');
    Route::put('/aluno/update', [AlunoController::class, 'update'])->name('aluno.update');
    Route::delete('/aluno/destroy', [AlunoController::class, 'destroy'])->name('aluno.destroy');

    Route::get('/professor/store', [ProfessorController::class, 'store'])->name('professor.store');
    Route::get('/professor/create', [ProfessorController::class, 'create'])->name('professor.create');
    Route::get('/professor/show', [ProfessorController::class, 'show'])->name('professor.show');
    Route::get('/professor/edit', [ProfessorController::class, 'edit'])->name('professor.edit');
    Route::put('/professor/update', [ProfessorController::class, 'update'])->name('professor.update');
    Route::delete('/professor/destroy', [ProfessorController::class, 'destroy'])->name('professor.destroy');
    
    Route::get('/endereco/store', [EnderecoController::class, 'store'])->name('endereco.store');
    Route::get('/endereco/create', [EnderecoController::class, 'create'])->name('endereco.create');
    Route::get('/endereco/show', [EnderecoController::class, 'show'])->name('endereco.show');
    Route::get('/endereco/edit', [EnderecoController::class, 'edit'])->name('endereco.edit');
    Route::put('/endereco/update', [EnderecoController::class, 'update'])->name('endereco.update');
    Route::delete('/endereco/destroy', [EnderecoController::class, 'destroy'])->name('endereco.destroy');

    Route::get('/matricula/store', [MatriculaController::class,'store'])->name('matricula.store');
    Route::get('/matricula/create', [MatriculaController::class, 'create'])->name('matricula.create');
    Route::get('/matricula/show', [MatriculaController::class,'show'])->name('matricula.show');
    Route::get('/matricula/edit', [MatriculaController::class, 'edit'])->name('matricula.edit');
    Route::put('/matricula/update', [MatriculaController::class, 'update'])->name('matricula.update');
    Route::delete('/matricula/destroy', [MatriculaController::class, 'destroy'])->name('matricula.destroy');

    Route::get('/turma/store', [TurmaController::class,'store'])->name('turma.store');
    Route::get('/turma/create', [TurmaController::class, 'create'])->name('turma.create');
    Route::get('/turma/show', [TurmaController::class,'show'])->name('turma.show');
    Route::get('/turma/edit', [TurmaController::class, 'edit'])->name('turma.edit');
    Route::put('/turma/update', [TurmaController::class, 'update'])->name('turma.update');
    Route::delete('/turma/destroy', [TurmaController::class, 'destroy'])->name('turma.destroy');
    
    Route::get('/responsavel/store', [ResponsavelController::class, 'store'])->name('responsavel.store');
    Route::get('/responsavel/create', [ResponsavelController::class, 'create'])->name('responsavel.create');
    Route::get('/responsavel/show', [ResponsavelController::class,'show'])->name('responsavel.show');
    Route::get('/responsavel/edit', [ResponsavelController::class, 'edit'])->name('responsavel.edit');
    Route::put('/responsavel/update', [ResponsavelController::class, 'update'])->name('responsavel.update');
    Route::delete('/responsavel/destroy', [ResponsavelController::class, 'destroy'])->name('responsavel.destroy');



});

require __DIR__.'/auth.php';
