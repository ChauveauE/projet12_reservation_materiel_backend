<!-- créer la bdd: insertion OU juste commande-->
<!-- php artisan migrate:fresh --seed -->
<!-- où est ce qu'on met le css?-->
<!-- gérer la suppression -->
<!-- affichage des valeurs du get -->

@extends('layouts.app')

@section('content')
    <div>
        <h2> Récapitulatif de la réservation </h2>
        <ul>
            <form action="{{ route('reservations') }}" method="GET">
            @csrf
                <div class="col-xs-4 col-xs-offset-4">
                    <fieldset class="marge">
                        date de la réservation: {{ $reservations->date }} <br>
                        / matériel réservé: {{ $materiels->libelle }} <br>
                        / quantité réservée: {{ $reservations->quantiteReserv }} <br>                        
                        <button class="supprimer">Supprimer</button>
                    </fieldset>
                </div>
                <button class="btnvalidation" name="nvlReserv">
                    <a href="{{ route('materiels') }}">Passer une nouvelle réservation</a>
                </button>
                <button class="btnvalidation" name="retourAccueil">
                    <a href="{{ route('home') }}">Réservation terminée</a>
                </button>
            </form>
        </ul>
    </div>
@endsection 

<style>
    .supprimer{
        color: red;
        margin-left: 300px;
    }
    .btnvalidation{
        font-style: italic;
        border-radius: 10px;
        background-color:dimgrey;
        font-size: 125%;
        margin-top: 15px;
        color: black;
    }
    /* .links > a {
        color: #636b6f;
        padding: 0 25px;
        font-size: 12px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
    } */
    .marge{
        border-radius: 8px;
        -moz-border-radius: 8px;
        -webkit-border-radius: 8px;
        border: 2px solid dimgrey;
        margin-right: auto;
        margin-left: auto;
        width: 50%;
    }
</style>