<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;
use App\Models\Historiqueert;
use App\Models\Historiquesrt;

class ProduitController extends Controller
{
    //
    public function index()
    {
        $produits = Produit::paginate(6);
        return view('produits', compact('produits'));
    }

    public function historiqueSortie(Produit $produit)
    {
        $hts = $produit->historiquesrts;
        return view('sortie', compact('hts', 'produit'));
    }

    public function historiqueEntree(Produit $produit)
    {
        $hte = $produit->historiqueerts;
        return view('entree', compact('hte', 'produit'));
    }
    public function ajouterEntree(Request $request)
    {
        $validatedDataert = $request->validate([
            'idert' => 'required|numeric',
            'dateentrer' => 'required|date',
            'numMarcher' => 'required',
            'fournisseur' => 'required',
            'qteCommander' => 'required|numeric',
            'qteLivrer' => 'required|numeric',
            'serie' => 'required'

        ]);
        $historiqueert = new Historiqueert($validatedDataert);
        $historiqueert->save();
        return redirect()->route('home');
    }

    public function search(Request $request)
{
    
    $produit = $request->input('produit');
    $produits = Produit::searchByName($produit);
    return view('show', compact('produits'));
}
}
