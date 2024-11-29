<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PessoaController;

Route::get('/', function () {
    return redirect()->route('pessoas.index');
});

Route::get('/pessoas', [PessoaController::class, 'index'])->name('pessoas.index');

//exibir formulario
Route::get('/pessoas/create',[PessoaController::class, 'create'])->name('pessoas.create');
//processa
Route::post('/pessoas',[PessoaController::class, 'store']) ->name('pessoas.store');
//destoi
Route::delete('/pessoas/{id}', [PessoaController::class, 'destroy'])->name('pessoas.destroy');
// Exibir formulario pra editar
Route::get('/pessoas/{id}/edit', [PessoaController::class, 'edit'])->name('pessoas.edit');

//Atualiza usuario 
Route::put('/pessoas/{id}', [PessoaController::class, 'update'])->name('pessoas.update');
