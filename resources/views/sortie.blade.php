@extends('layout.home')
    @section('contenu')
<h1  class="mt-5" style="text-align: center; font-style: italic;">Historique des sorties pour le produit :<p class="text-danger">{{ $produit->désignation }}</p></h1>
<table class="table table-striped table-bordered" style="background-color: beige;">
<thead class="thead-light" style="background-color: beige; font-style: italic;">
        <tr>
            <th scope="col" style="background-color: beige; border-color: white;">Date de sortie</th>
            <th scope="col" style="background-color: beige; border-color: white;">Quantité</th>
            <th scope="col" style="background-color: beige; border-color: white;">Numéro de marché</th>
            <th scope="col" style="background-color: beige; border-color: white;">Fournisseur</th>
        </tr>
        </thead>
        <tbody style="font-style: italic;">
        @foreach($hts as $hts)
            <tr style="background-color: white;">
                <td style="border-color: white;">{{ $hts->datesortie }}</td>
                <td style="border-color: white;">{{ $hts->qteSortie }}</td>
                <td style="border-color: white;">{{ $hts->numMarcher }}</td>
                <td style="border-color: white;">{{ $hts->fournisseur }}</td>
            </tr>
        @endforeach
        </tbody>
</table>
<div class="d-flex justify-content-center">
    <a href="{{ route('download-pdf-Hts') }}" class="btn btn-outline-secondary" style="background-color: beige; font-style: italic;" >telecharger le pdf</a>
</div>
    @endsection
    