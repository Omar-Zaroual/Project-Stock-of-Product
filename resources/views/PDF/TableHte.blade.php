<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<h1 style="text-align: center; font-style: italic;">Historique des entrées de produit :</h1>
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
        @foreach ($tableData as $row)
            <tr style="background-color: white;">
                <td style="border-color: white;">{{ $row->dateentrer }}</td>
                <td style="border-color: white;">{{ $row->numMarcher }}</td>
                <td style="border-color: white;">{{ $row->fournisseur }}</td>
                <td style="border-color: white;">{{ $row->qteCommander }}</td>
                <td style="border-color: white;">{{ $row->qteLivrer }}</td>
            </tr>
        @endforeach
</body>
</html>