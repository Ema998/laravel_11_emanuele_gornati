<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;
use App\Http\Requests\ProdottiRequest;
use App\Http\Requests\ProdottiUpdateRequest;
use Illuminate\Support\Facades\Auth;

class ProdottiController extends Controller
{
    public function homepage () 
    {
        return view('homepage');
    }

    public function store(ProdottiRequest $request)
    {
        $nome = $request->input('nome');
        $prezzo = $request->input('prezzo');
        $descrizione = $request->input('descrizione');
        $img = null;

        if($request->file('img')){
            $img = $request->file('img')->store('img', 'public');
        }
        
        $prodotto = Game::create([
            'nome' => $nome,
            'prezzo' => $prezzo,
            'descrizione' => $descrizione,
            'img' => $img,
            'user_id' => Auth::user()->id,
        ]);

        return redirect()->route('prodotti')->with('message', 'Prodotto aggiunto con successo!');
    }

    public function index(){
        $prodotti = Game::all();
        return view('prodotti', ['prodotti' => $prodotti]);
    }

    public function show(Game $prodotto){
        return view('dettaglioProdotto', compact('prodotto'));
    }

    public function destroy(Game $prodotto){
        $prodotto->delete();
        return redirect()->route('prodotti')->with('message', 'Prodotto eliminato con successo!');
    }

    public function edit(Game $prodotto){
        return view('modificaProdotto', compact('prodotto'));
    }
    public function update(ProdottiUpdateRequest $request, Game $prodotto){
        $prodotto->update([
            'nome' => $request->input('nome'),
            'prezzo' => $request->input('prezzo'),
            'descrizione' => $request->input('descrizione'),
        ]);
        if($request->file('img')){
            $request->validate([
                'img' => 'image',
            ]);
           $imgPath = $request->file('img')->store('img', 'public');
            $prodotto->update([
                'img' => $imgPath
            ]);
        }
        return redirect()->route('prodotti')->with('message', 'Prodotto modificato con successo!');
    }
}
