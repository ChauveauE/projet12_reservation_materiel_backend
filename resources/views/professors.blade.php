<!-- variable ecole n'est pas défini pour le menu déroulant-->
@extends('layouts.app')

@section('content')
    <div>
        <h2> Création d'un nouvel utilisateur </h2>
        <ul>
            <label for="nom" id="nom"> Nom: </label>
            <input type="textarea" name="nom" id="nom" required /><br><br>
            <label for="prenom" id="prenom"> Prénom: </label>
            <input type="textarea" name="prenom" id="prenom" required /><br><br>
            <label for="email" id="email"> Email: </label>
            <input type="textarea" name="email" id="email" required /><br><br>
            <label for="ecole" id="ecole"> Ecole: </label>
            <select id="ecole">
                @foreach ($ecoles as $ecole)
                  <option value="{{ $ecole->id }}">{{ $ecole->nomEcole }}</option>
                @endforeach
            </select><br><br>
            <!-- <select id="ecole"><option></option><option>iut la roche sur yon</option></select><br><br> -->
            <label for="mdp" id="mdp"> Mot de passe: </label>
            <input type="textarea" name="mdp" id="mdp" required /><br><br>
            <button class="btnsimple"> Créer le compte </button>
        </ul>
    </div>
@endsection 

<style>
    .btnsimple{
        font-style: italic;
        border-radius: 10px;
        background-color:dimgrey;
        margin-left: 300px;
    }
    label{
        display: inline-block;
        width: 175px;
    }
    input{
        display: inline;
    }
</style>