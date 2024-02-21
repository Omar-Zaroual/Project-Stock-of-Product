@extends('layout.home')

@section('contenu')
@section('sortie')
<style>
    input[type="text"],
        input[type="date"],
        input[type="number"],
        .form-control {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
</style>
@endsection
    <div class="container mt-5" >
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header" style="text-align: center; font-style: italic; background-color: beige; font-size: 24px; font-weight: bold;">{{ __('Ajouter une sortie') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('ajouterSortie') }}" class="text-center">
                            @csrf

                            <div class="form-group">
                                <label for="idsrt">ID de sortie :</label>
                                <input type="text" class="form-control" id="idsrt" name="idsrt" required>
                            </div>

                            <div class="form-group">
                                <label for="datesortie">Date de sortie :</label>
                                <input type="date" class="form-control" id="datesortie" name="datesortie" required>
                            </div>

                            <div class="form-group">
                                <label for="qteSortie">Quantité sortie :</label>
                                <input type="number" class="form-control" id="qteSortie" name="qteSortie" required>
                            </div>

                            <div class="form-group">
                                <label for="numMarcher">Numéro de marché :</label>
                                <input type="text" class="form-control" id="numMarcher" name="numMarcher" required>
                            </div>

                            <div class="form-group">
                                <label for="fournisseur">Fournisseur :</label>
                                <input type="text" class="form-control" id="fournisseur" name="fournisseur" required>
                            </div>

                            <div class="form-group">
                                <label for="serie">Série :</label>
                                <input type="text" class="form-control" id="serie" name="serie" required>
                            </div>

                            <button type="submit" class="btn btn-outline-secondary  justify-content-center"  style="background-color: beige; font-style: italic;">Valider</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
