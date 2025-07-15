<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function prodotti () {
        $prodotti = Game::all(); 
        return view('prodotti', compact('prodotti'));
    }

    public function aggiungiProdotto () {
        return view('aggiungiProdotto');
    }
}

