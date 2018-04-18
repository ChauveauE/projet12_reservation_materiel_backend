@extends('layouts.app')

@section('content')
    <div>
        <h2> Récapitulatif de la réservation </h2>
        <br>
        <ul>
            <div class="col-xs-4 col-xs-offset-4">
                <fieldset class="marge">
                    <label class="titre">date de la réservation:</label>
                    {{ $reservations->date }} <br>
                    <label class="titre">/ matériel réservé:</label>
                    {{ $materiels->libelle }} <br>
                    <label class="titre">/ quantité réservée:</label>
                    {{ $reservations->quantiteReserv }} <br>
                    <form action="{{ route('deletereservations', ["id"=>$reservations->id]) }}" method="POST">
                    @csrf 
                        {{method_field('delete')}}                
                        <button type="submit" class="supprimer">Supprimer</button>
                    </form>
                </fieldset>
            </div>
            <br>
            <button class="btnvalidation" name="nvlReserv">
                <a href="{{ route('materiels') }}">Passer une nouvelle réservation</a>
            </button>
            <button class="btnvalidation" name="retourAccueil">
                <a href="{{ route('home') }}">Réservation terminée</a>
            </button>
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
        font-size: 125%;
        margin-top: 15px;
        color: black;
    }
    .marge{
        border-radius: 8px;
        -moz-border-radius: 8px;
        -webkit-border-radius: 8px;
        border: 2px solid dimgrey;
        width: 50%;
    }
    .titre{
        font-weight: bold;
    }
</style>