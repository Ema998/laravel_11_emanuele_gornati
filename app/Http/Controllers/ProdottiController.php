<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;
use App\Http\Requests\ProdottiRequest;

class ProdottiController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except('homepage');
    }

    public function store(ProdottiRequest $request)
    {
        $nome = $request->input('nome');
        $prezzo = $request->input('prezzo');
        $descrizione = $request->input('descrizione');
        $img = null;

        if($request->file('img')){
            $img = $request->file('img')->store('public/img');
        }
        
        
        $prodotto = Game::create([
            'nome' => $nome,
            'prezzo' => $prezzo,
            'descrizione' => $descrizione,
            'img' => $img
        ]);

        return redirect()->route('prodotti')->with('message', 'Prodotto aggiunto con successo!');
    }

    public function index(){
        $prodotti = Game::all();
        return view('prodotti', ['prodotti' => $prodotti]);
    }

    public function show(Game $prodotto){
        $prodotto = Game::find($prodotto);
        return view('dettaglioProdotto', ['prodotto' => $prodotto]);
    }

    public function destroy(Game $prodotto){
        $prodotto = Game::find($prodotto);
        $prodotto->delete();
        return redirect()->route('prodotti')->with('message', 'Prodotto eliminato con successo!');
    }

    public function edit(Game $prodotto){
        $prodotto = Game::find($prodotto);
        return view('modificaProdotto', ['prodotto' => $prodotto]);
    }
    public function update(ProdottiRequest $request, $prodotto){
        $prodotto = Game::find($prodotto);
        $prodotto->update($request->validated());
        return redirect()->route('prodotti')->with('message', 'Prodotto modificato con successo!');
    }
}
