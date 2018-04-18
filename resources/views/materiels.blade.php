<!-- dans le tableau foreach déclarer materiels-->
<!-- menu auto complexion
https://www.packtpub.com/mapt/book/web_development/9781782162827/2/ch02lvl1sec27/creating-an-autocomplete-text-input -->
@extends('layouts.app')

@section('content')
    <div>
        <h2> Sélectionner le matériel à réserver </h2>
        <ul>
            <form action="{{ route('savereservations') }}" method="POST">
            @csrf
                <label for="date" id="date">Date:</label>
                <input type="date" name="date" exept="dimanche" required/><br>
                <label for="materiels" id="materiels">Matériel:</label>
                <select name="materiels">
                    @foreach ($materiels as $materiel)
                        <option value="{{ $materiel->id }}">{{ $materiel->libelle }}</option>
                    @endforeach
                </select><br>
                <label for="quantiteReserv" id="quantiteReserv">Quantité à réserver:</label>
                <input type="text" class="quantiteReserv" name="quantiteReserv">
                <input type="hidden" name="idP" value="{{ Auth::user()->id }}"> <br>       
                <button class="btnsimple"> Valider la saisie </button><br><br>
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
    select{
        height: 30px;
    }
</style>
