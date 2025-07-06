<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ProdottiController;

Route::get('/', [ProdottiController::class, 'homepage'])->name('homepage');
Route::get('/prodotti', [PublicController::class, 'prodotti'])->name('prodotti')->middleware('auth');
Route::get('/aggiungiProdotto', [PublicController::class, 'aggiungiProdotto'])->name('aggiungiProdotto')->middleware('auth');
Route::post('/aggiungiProdotto/submit', [ProdottiController::class, 'store'])->name('aggiungiProdottoSubmit')->middleware('auth');
Route::get('/dettalioProdotto/{prodotto}', [ProdottiController::class, 'show'])->name('dettaglioProdotto')->middleware('auth');
Route::get('/modificaProdotto/{prodotto}', [ProdottiController::class, 'edit'])->name('modificaProdotto')->middleware('auth');
Route::put('/modificaProdotto/{prodotto}/submit', [ProdottiController::class, 'update'])->name('updateProdotto')->middleware('auth');
Route::delete('/prodotti/delete/{prodotto}', [ProdottiController::class, 'destroy'])->name('deleteProdotto')->middleware('auth');