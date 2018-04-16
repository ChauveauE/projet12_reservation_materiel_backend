<!-- dans le tableau foreach déclarer materiels-->
<!-- menu auto complexion
https://www.packtpub.com/mapt/book/web_development/9781782162827/2/ch02lvl1sec27/creating-an-autocomplete-text-input -->
@extends('layouts.app')

@section('content')
    <div>
        <h2> Sélectionner le matériel à réserver </h2>
        <ul>
            <form action="{{ route('materiels') }}" method="GET">
            @csrf
                <label for="date" id="date">Date:</label>
                <input type="date" name="dateReservation" exept="dimanche" required/>
                <input type="text" id="materiels">
                <button class="btnsimple">Rechercher</button><br><br>
            </form>
            <form action="{{ route('savemateriels') }}" method="POST">
                @foreach ($materiels as $materiel)
                    <option value="{{ $materiel->id }}">{{ $materiel->libelle }}</option>
                    /quantité disponible:
                    <option value="{{ $materiel->id }}">{{ $materiel->quantiteDispo }}</option>
                    / quantité souhaitée: 
                    <input type="text" class="quantiteReserv"> <br><br>
                @endforeach
                <button class="btnsimple"> Valider la saisie </button><br><br>
                <button class="btnvalidation">Visualiser la réservation</button>
            </form>
        </ul>
    </div>
@endsection 

<style>
    .btnsimple{
        font-style: italic;
        border-radius: 10px;
        background-color:dimgrey;
    }
    .btnvalidation{
        font-style: italic;
        border-radius: 10px;
        background-color:dimgrey;
        margin-left: 300px;
        font-size: 100%;
    }
    input{
        display: center;
        width: 150px;
    }
    .quantiteReserv{
        width: 30px;
    }
</style>
