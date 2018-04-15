<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.css"/>

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'ReservationMateriels ') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                @auth
                    <li><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                    <li><a class="nav-link" href="{{ route('register') }}">Register</a></li>

                    @if (Auth::user()->id == 1)
                        <li><a class="nav-link" href="{{ route('ongletadmin') }}">Connexion administrateur</a></li>
                        <li><a class="nav-link" href="{{ route('professors') }}">Création nouveau compte</a></li>
                        <li><a class="nav-link" href="{{ route('receptioncde') }}">Saisi commande</a></li>
                    @else
                        <li><a class="nav-link" href="{{ route('connexions') }}">Connexions</a></li>
                        <li><a class="nav-link" href="{{ route('materiels') }}">Sélection matériels</a></li>
                        <li><a class="nav-link" href="{{ route('reservations') }}">Visualisation de la réservation</a></li>
                    @endif
                @endauth      
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>