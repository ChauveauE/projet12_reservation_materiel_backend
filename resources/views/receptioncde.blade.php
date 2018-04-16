<!-- Faire une boucle avec le numéro saisi-->  
@extends('layouts.app')

@section('content') 
    <div>
        <h2> Saisir la réception de la commande </h2>
        <ul>
            <form action="{{ route('savemateriels') }}" method="POST">
            @csrf
                <label for="produitRecept" id="produitRecept">nombre de produits réceptionnés :</label> 
                <input type="text" class="nbProduitReceptionne"><br><br>
                <label for="libelle" id="libelle">libellé :</label> 
                <input type="text" class="libelle" id="libelle">
                <label for="quantiteDispo" id="quantiteDispo">/ quantité réceptionnée :</label> 
                <input type="text" class="quantiteDispo" id="quantiteDispo"> <br><br>
                <button class="btnsimple" type="submit">Valider la saisie</button>
            </form>
        </ul>   
    </div>    
@endsection 

<style>
    .libelle{
        width: 300px;
    }
    .btnsimple{
        font-style: italic;
        border-radius: 10px;
        <background-color:dimgre class=""></background-color:dimgre>y;
        margin-left: 300px;
        font-size: 100%;
    }
    input{
        display: center;
        width: 150px;
    }
    .quantiteDispo{
        width: 30px;
    }
    .nbProduitReceptionne{
        width: 30px;
    }
</style>