<!-- afficher les valeurs de la bdd derrière les champs-->
@extends('layouts.app')

@section('content')
    <div>
        <h2> Récapitulatif de la réservation </h2>
        <ul>
            <div class="col-xs-4 col-xs-offset-4">
                <li v-for="reservation in reservations" :key="reservation.id">
                    <fieldset class="marge">
                        date de la réservation: <br>
                        / matériel réservé: <br>
                        / quantité réservée: <br>
                        <button class="supprimer">Supprimer</button>
                    </fieldset>
                </li>
            </div>
            <button class="btnvalidation">Valider la réservation</button>
        </ul>
    </div>
@endsection 

<style>
    .supprimer{
        color: red;
    }
    .btnvalidation{
        font-style: italic;
        border-radius: 10px;
        background-color:dimgrey;
        margin-left: 300px;
        font-size: 125%;
        margin-top: 15px;
    }
    .marge{
        border-radius: 8px;
        -moz-border-radius: 8px;
        -webkit-border-radius: 8px;
        border: 2px solid dimgrey;
    }
</style>