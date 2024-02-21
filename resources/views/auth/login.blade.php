<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


</head>
<body>

    <!-- Section: Design Block -->
    <section class="text-center text-lg-start">
    <style>
        body {
            background-color: beige;
        }
        .cascading-right {
        margin-right: -50px;
        }

        @media (max-width: 991.98px) {
        .cascading-right {
            margin-right: 0;
        }
        }
    </style>

    <!-- Jumbotron -->
    <form method="POST" action="{{ route('login') }}">
            @csrf
    <div class="container py-4">
        <div class="row g-0 align-items-center">
        <div class="col-lg-6 mb-5 mb-lg-0">
            <div class="card cascading-right" style="
                background: hsla(0, 0%, 100%, 0.55);
                backdrop-filter: blur(30px);
                ">
            <div class="card-body p-5 shadow-5 text-center">
                <h2 class="fw-bold mb-5">Se connecter</h2>
                <form method="POST" action="{{ route('login') }}">
                @csrf
                

                <!-- Email input -->
                <div class="form-outline mb-4">
                    <input id="email" type="email" name="email" class="form-control" :value="old('email')" required autofocus autocomplete="username"/>
                    <label class="form-label" for="email">Adresse e-mail</label>
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                    <input type="password" id="password" class="form-control" name="password" required autocomplete="current-password" />
                    <label class="form-label" for="password">Mot de passe</label>
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>
                

                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4">
                Se connecter
                </button>

                </form>
            </div>
            </div>
        </div>

        <div class="col-lg-6 mb-5 mb-lg-0">
            <img src="{{ asset('images/img4.jpg') }}" class="w-100 rounded-4 shadow-4"
            alt="" />
        </div>
        </div>
    </div>
    
    <!-- Jumbotron -->
</section>
</body>
<!-- Section: Design Block -->
</html>
