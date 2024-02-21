<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="home.css">
    @yield('produit')
    @yield('sortie')
    @yield('entree')
    <title>Home</title>
    <style>
        body {
            padding-top: 70px; /* Ajouter un espace au-dessus du contenu pour éviter qu'il soit caché par le navbar fixe */
        }

        .navbar {
            background-color: beige;
            border-radius: 10px;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 9999;
        }

        .navbar-nav .nav-link {
            color: black;
            border-radius: 5px;
            transition: color 0.3s;
            font-size: 35px; /* Increase the font size to 20px */
            font-weight: bold; /* Rendre le texte en gras */
        }

        .navbar-nav .nav-link:hover {
            color: black;
            background-color: white;
        }
        
        .image {
            height: 100px;
            width: 100px;
        }
        
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light" style="font-style: italic;">
        <div class="container-fluid">
            <a class="navbar-brand" href="/home"><img class="image" src="{{ asset('images/img3.png') }}" alt="Logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/home">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/produits/htentree">Entrée</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/produits/htsortie">Sortie</a>
                    </li>
                </ul>
                
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="nav-link btn btn-outline-secondary" type="submit" style="background-color: beige; font-style: italic;">
                        {{ __('Log Out') }}
                    </button>
                </form>
            </div>
        </div>
    </nav>
    @yield('contenu')
</body>
</html>
