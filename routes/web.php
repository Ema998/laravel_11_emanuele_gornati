<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ProdottiController;

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');
Route::get('/prodotti', [PublicController::class, 'prodotti'])->name('prodotti');
Route::get('/aggiungiProdotto', [PublicController::class, 'aggiungiProdotto'])->name('aggiungiProdotto');
Route::post('/aggiungiProdotto/submit', [ProdottiController::class, 'store'])->name('store');
Route::get('/dettalioProdotto/{prodotto}', [PublicController::class, 'dettaglioProdotto'])->name('dettaglioProdotto');
