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
<h1 style="text-align: center; font-style: italic;">Liste des produits</h1>
<table class="table table-striped table-bordered" style="background-color: beige;">
    <thead class="thead-light" style="background-color: beige; font-style: italic;">
        <tr>
            <th scope="col" style="background-color: beige; border-color: white;">Série</th>
            <th scope="col" style="background-color: beige; border-color: white;">Désignation</th>
            <th scope="col" style="background-color: beige; border-color: white;">Disponible</th>
            <th scope="col" style="background-color: beige; border-color: white;">Unité</th>
            <th scope="col" style="background-color: beige; border-color: white;">Stock Min</th>
            
        </tr>
    </thead>
    <tbody style="font-style: italic;">
    @foreach ($tableData as $row)
        <tr style="background-color: white;">
            <td style="border-color: white;">{{ $row->serie }}</td>
            <td style="border-color: white;">{{ $row->désignation }}</td>
            <td style="border-color: white;">{{ $row->disponible }}</td>
            <td style="border-color: white;">{{ $row->unité }}</td>
            <td class="text-danger" style="border-color: white;">{{ $row->stockMin }}</td>
            
        </tr>
        @endforeach
    </tbody>
</table>
</body>
</html>


