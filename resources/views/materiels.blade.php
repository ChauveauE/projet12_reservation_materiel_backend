@extends('layouts.app')

@section('content')
    <div>
        <h2> Sélectionner le matériel à réserver </h2><br>
        @if ($errors->any())
            <div class="">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <ul>
            <form action="{{ route('savereservations') }}" method="POST">
            @csrf
                <label for="date" id="date">Date:</label>
                <input type="date" name="date" exept="dimanche" value="{{old('date')}}" required/><br>
                <label for="materiels" id="materiels">Matériel:</label>
                <select name="materiels">
                    @foreach ($materiels as $materiel)
                        <option value="{{ $materiel->id }}">{{ $materiel->libelle }}</option>
                    @endforeach
                </select><br>
                <label for="quantiteReserv" id="quantiteReserv">Quantité à réserver:</label>
                <input type="text" value="{{old('quantiteReserv')}}" class="quantiteReserv" name="quantiteReserv">
                <input type="hidden" name="idP" value="{{ Auth::user()->id }}"> <br>       
                <button class="btnsimple"> Valider la saisie </button><br><br>
            </form>
            <button class="retourAccueil" name="retourAccueil">
                <a href="{{ route('home') }}">Retour à l'accueil</a>
            </button>
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
    .retourAccueil{
        font-style: italic;
        border-radius: 10px;
        font-size: 125%;
        margin-top: 15px;
        color: black;
    }
</style>
