<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProdutoController;
use Illuminate\Support\Facades\Route;



Route::get('/produto',[ProdutoController::class,'index'])->name('produto.index');
Route::get('/produto/create', [ProdutoController::class, 'create'])->name('produto.create');
Route::post('/cadastrar', [ProdutoController::class, 'store'])->name('produto.store'); 
Route::get('/produto/{produto}', [ProdutoController::class, 'show'])->name('produto.show');
Route::get('/produto/{produto}/edit', [ProdutoController::class, 'edit'])->name('produto.edit');
Route::put('/produto/{produto}', [ProdutoController::class, 'update'])->name('produto.update');
Route::delete('/produto/{produto}', [ProdutoController::class, 'destroy'])->name('produto.destroy');
// Route::resources(['produtos' => ProdutoController::class]);


Route::get('/', [HomeController::class, 'index'])->name('home');


Auth::routes();
