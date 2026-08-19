<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\LogAcessoMiddleware;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [App\Http\Controllers\Principal::class, 'principal']);

Route::prefix('/aluno')->group(function(){
    Route::get('/index', [App\Http\Controllers\AlunoController::class, 'index'])->name('aluno.index');
    Route::get('/create', [App\Http\Controllers\AlunoController::class, 'create'])->name('aluno.create');
    Route::post('/show', [App\Http\Controllers\AlunoController::class, 'show'])->name('aluno.show');
	  Route::post('/edit', [App\Http\Controllers\AlunoController::class, 'edit'])->name('aluno.edit');
	  Route::post('/update', [App\Http\Controllers\AlunoController::class, 'update'])->name('aluno.update');
    Route::post('/destroy', [App\Http\Controllers\AlunoController::class, 'destroy'])->name('aluno.destroy');
}); 
