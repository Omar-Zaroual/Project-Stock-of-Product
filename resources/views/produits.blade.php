@extends('layout.home')
@section('contenu')
@section ('produit')
<style>
    .form-control {
            border-radius: 5px;
            width: 200px;
            font-size: 16px; /* Modifier la taille de la police */
        }
    .pagination .page-item .page-link {
        background-color: beige;
        border-color: beige;
        color: black;
    }

    .pagination .page-item .page-link:hover {
        background-color: beige;
        border-color: beige;
        color: black;
    }
    .pagination .page-item .page-link:hover {
        background-color: beige;
        border-color: beige;
        color: white; /* Couleur du texte en survol */}
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
        @foreach($produits as $produit )
        <tr style="background-color: white;">
            <td style="border-color: white;">{{ $produit->serie }}</td>
            <td style="border-color: white;">{{ $produit->désignation }}</td>
            <td style="border-color: white;">{{ $produit->disponible }}</td>
            <td style="border-color: white;">{{ $produit->unité }}</td>
            <td class="text-danger" style="border-color: white;">{{ $produit->stockMin }}</td>
            <td style="border-color: white;">
                <a href="{{ route('entree', $produit) }}" class="btn btn-success">Historique Entrée</a>
                <a href="{{ route('sortie', $produit) }}" class="btn btn-danger"> Historique Sortie</a>
            </td>
            
        </tr>
        
        @endforeach
    </tbody>
</table>
<div class="d-flex justify-content-center" style="font-style: italic;">
    {{$produits->links()}}
</div>
<div class="d-flex justify-content-center">
    <a href="{{ route('download-pdf-Pr') }}" class="btn btn-outline-secondary" style="background-color: beige; font-style: italic;">Télécharger le PDF</a>
</div>
@endsection
