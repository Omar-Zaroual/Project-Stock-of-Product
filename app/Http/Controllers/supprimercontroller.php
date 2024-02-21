<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Historiquesrt;

class supprimercontroller extends Controller
{
    //
    public function ajouterSortie(Request $request)
    {
    $validatedDatasrt = $request->validate([
        'idsrt' => 'required',
        'datesortie' => 'required',
        'qteSortie' => 'required',
        'numMarcher' => 'required',
        'fournisseur' => 'required',
        'serie' => 'required'
    ]);
    

    $historiquesrt = new Historiquesrt($validatedDatasrt);
    $historiquesrt->save();

    return redirect()->route('home');
    }
}
