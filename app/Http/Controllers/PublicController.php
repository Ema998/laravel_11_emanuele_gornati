<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function homepage () {
        return view('index');
    }

    public function prodotti () {
        return view('prodotti');
    }

    public function aggiungiProdotto () {
        return view('aggiungiProdotto');
    }
}

