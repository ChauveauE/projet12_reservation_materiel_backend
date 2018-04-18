@extends('layouts.app')

@section('content') 
    <div>
        <h2> Saisir la réception de la commande </h2>
        <ul>
            <form action="{{ route('receptioncde') }}" method="GET">
            @csrf
                <label for="produitRecept" id="produitRecept">Saisir le nombre de produits réceptionnés :</label> 
                <input type="text" class="nbProduitReceptionne" id="nbProduitReceptionne" name="nbProduitReceptionne">
                <button class="btnsimple" type="submit">Valider</button>
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
        background-color: dimgrey;
        margin-left: 50px;
        font-size: 100%;
    }
    input{
        display: center;
        width: 150px;
    }
    .nbProduitReceptionne{
        width: 30px;
    }
</style>
