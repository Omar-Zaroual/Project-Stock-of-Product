@extends('layout.home')
    @section('contenu')

<h1 class="mt-5" style="text-align: center; font-style: italic;">Historique des entrées pour le produit :<p class="text-danger">{{ $produit->désignation }}</p></h1>
<table class="table table-striped table-bordered" style="background-color: beige;">
<thead class="thead-light" style="background-color: beige; font-style: italic;">
        <tr>
            <th scope="col" style="background-color: beige; border-color: white;">Date d'entrée</th>
            <th scope="col" style="background-color: beige; border-color: white;">Numéro de marché</th>
            <th scope="col" style="background-color: beige; border-color: white;">Fournisseur</th>
            <th scope="col" style="background-color: beige; border-color: white;">Quantité commandée</th>
            <th scope="col" style="background-color: beige; border-color: white;">Quantité livrée</th>
        </tr>
        </thead>
        <tbody style="font-style: italic;">
        @foreach($hte as $hte)
            <tr style="background-color: white;">
                <td style="border-color: white;">{{ $hte->dateentrer }}</td>
                <td style="border-color: white;">{{ $hte->numMarcher }}</td>
                <td style="border-color: white;">{{ $hte->fournisseur }}</td>
                <td style="border-color: white;">{{ $hte->qteCommander }}</td>
                <td style="border-color: white;">{{ $hte->qteLivrer }}</td>
            </tr>
        @endforeach
        </tbody>
</table>
<div class="d-flex justify-content-center">
    <a href="{{ route('download-pdf-Hte') }}" class="btn btn-outline-secondary" style="background-color: beige; font-style: italic;">telecharger le pdf</a>
</div>
    @endsection    