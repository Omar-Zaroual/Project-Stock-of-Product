<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    
    <div class="container py-4">
        <div class="row g-0 align-items-center">
        <div class="col-lg-6 mb-5 mb-lg-0">
            <div class="card cascading-right" style="
                background: hsla(0, 0%, 100%, 0.55);
                backdrop-filter: blur(30px);
                ">
            <div class="card-body p-5 shadow-5 text-center">
                <h2 class="fw-bold mb-5">S'inscrire maintenant</h2>
                <form method="POST" action="{{ route('register') }}">
                @csrf
                <!-- 2 column grid layout with text inputs for the first and last names -->
                <!-- Name -->
            
                    <div class="form-outline mb-4">
                    <div class="form-outline">
                        <input type="text" id="name" class="form-control" name="name" :value="old('name')" required autofocus autocomplete="name"/>
                        <label class="form-label" for="name"> Nom </label>
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>
                    </div>
                    
                <!-- Email input -->
                <div class="form-outline mb-4">
                    <input type="email" id="email" class="form-control" name="email" :value="old('email')" required autocomplete="username"/>
                    <label class="form-label" for="email">Adresse e-mail</label>
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                    <input type="password" id="password" class="form-control" name="password" required autocomplete="new-password" />
                    <label class="form-label" for="password">Mot de passe</label>
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Confirm Password -->
            <div class="form-outline mb-4">
                <input id="password_confirmation" class="form-control"
                    type="password"
                    name="password_confirmation" required autocomplete="new-password" />
                <label class="form-label" for="password_confirmation">Confirmez le mot de passe</label>
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4">
                S'inscrire
                </button>

                <div class="form-outline mb-4">
                    <a class="login-link" href="{{ route('login') }}">
                    Déjà inscrit?
                    </a>
                </div>

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
    </form>
    <!-- Jumbotron -->
</section>
<!-- Section: Design Block -->
</body>
</html>
    



