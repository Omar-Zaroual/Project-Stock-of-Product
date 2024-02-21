@extends('layout.home')
@section('contenu')
@section ('produit')
<style>
    
</style>
@endsection

<h1 class="mt-5" style="text-align: center; font-style: italic;">Liste des produits</h1>
<table class="table table-striped table-bordered" style="background-color: beige;">
    <thead class="thead-light" style="background-color: beige; font-style: italic;">
        <tr>
            <th scope="col" style="background-color: beige; border-color: white;">Série</th>
            <th scope="col" style="background-color: beige; border-color: white;">Désignation</th>
            <th scope="col" style="background-color: beige; border-color: white;">Disponible</th>
            <th scope="col" style="background-color: beige; border-color: white;">Unité</th>
            <th scope="col" style="background-color: beige; border-color: white;">Stock Min</th>
            <th scope="col" style="background-color: beige; border-color: white;">Actions</th>
        </tr>
    </thead>
    <tbody style="font-style: italic;">
        
        <tr style="background-color: white;">
            <td style="border-color: white;">{{ $produits->serie }}</td>
            <td style="border-color: white;">{{ $produits->désignation }}</td>
            <td style="border-color: white;">{{ $produits->disponible }}</td>
            <td style="border-color: white;">{{ $produits->unité }}</td>
            <td class="text-danger" style="border-color: white;">{{ $produits->stockMin }}</td>
            <td style="border-color: white;">
                <!-- <a href="{{ route('entree', $produit) }}" class="btn btn-success">Historique Entrée</a>
                <a href="{{ route('sortie', $produit) }}" class="btn btn-danger"> Historique Sortie</a> -->
            </td>
            
        </tr>
        
    </tbody>
</table>
        
@endsection
