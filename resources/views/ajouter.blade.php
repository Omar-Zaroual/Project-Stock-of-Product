@extends('layout.home')
@section('entree')
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
@section('contenu')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header" style="text-align: center; font-style: italic; background-color: beige; font-size: 24px; font-weight: bold;">{{ __('Ajouter une entrée') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('ajouterEntree') }}" class="text-center">
                            @csrf

                            <div class="form-group">
                                <label for="idert">{{ __('ID d\'entrée ') }} :</label>
                                <input type="text" class="form-control" id="idert" name="idert" required>
                            </div>

                            <div class="form-group">
                                <label for="dateentrer">{{ __('Date d\'entrée ') }} :</label>
                                <input type="date" class="form-control" id="dateentrer" name="dateentrer" required>
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
                                <label for="qteCommander">Quantité commandée :</label>
                                <input type="number" class="form-control" id="qteCommander" name="qteCommander" required>
                            </div>

                            <div class="form-group">
                                <label for="qteLivrer">Quantité livrée :</label>
                                <input type="number" class="form-control" id="qteLivrer" name="qteLivrer" required>
                            </div>

                            <div class="form-group">
                                <label for="serie">Série :</label>
                                <input type="text" class="form-control" id="serie" name="serie" required>
                            </div>

                            <button type="submit" class="btn btn-outline-secondary" style="background-color: beige; font-style: italic;">Valider</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
