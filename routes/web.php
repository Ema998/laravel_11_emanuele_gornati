<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ProdottiController;

Route::get('/', [ProdottiController::class, 'homepage'])->name('homepage');
Route::get('/prodotti', [PublicController::class, 'prodotti'])->name('prodotti');
Route::get('/aggiungiProdotto', [PublicController::class, 'aggiungiProdotto'])->name('aggiungiProdotto');
Route::post('/aggiungiProdotto/submit', [ProdottiController::class, 'store'])->name('aggiungiProdottoSubmit');
Route::get('/dettalioProdotto/{prodotto}', [ProdottiController::class, 'show'])->name('dettaglioProdotto');
Route::get('/modificaProdotto/{prodotto}', [ProdottiController::class, 'edit'])->name('modificaProdotto');
Route::put('/modificaProdotto/{prodotto}/submit', [ProdottiController::class, 'update'])->name('updateProdotto');
Route::delete('/prodotti/delete/{prodotto}', [ProdottiController::class, 'destroy'])->name('deleteProdotto');