<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        
        .bg-image {
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            height: 100vh;
        }

        .custom-title {
            font-size: 48px;
            font-weight: bold;
        }
    </style>

</head>
<body>
<!-- Section: Design Block -->
<section class="text-center">
    <!-- Background image -->
    <div class="p-4 bg-image" style="background-image: url('{{ asset('images/img1.png') }}');"></div>
    <!-- Background image -->

    <div class="card mx-4 mx-md-5 shadow-5-strong" style="margin-top: -100px; background: hsla(0, 0%, 100%, 0.8); backdrop-filter: blur(30px);">
        <div class="card-body py-5 px-md-5">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8">
                    
                    <form>
                        <!-- 2 column grid layout with text inputs for the first and last names -->
                        <div class="row">
                            @if (Route::has('login'))
                                <div class="col-md-6 mb-4">
                                    @auth
                                        <div class="form-outline">
                                            <a href="{{url('/dashboard') }}" class="btn btn-outline-secondary btn-lg mx-4">Dashboard</a>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                    @else
                                        <div class="form-outline">
                                            <a href="{{ route('login') }}" class="btn btn-outline-secondary btn-lg mx-4" style="background-color: beige;">se connecter</a>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        @if (Route::has('register'))
                                            <div class="form-outline">
                                                <a href="{{ route('register') }}" class="btn btn-outline-secondary btn-lg mx-4" style="background-color: beige;">S'inscrire</a>
                                            </div>
                                        @endif
                                    @endauth
                                </div>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Section: Design Block -->
</body>
</html>
