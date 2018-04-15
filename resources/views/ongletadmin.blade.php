@extends('layouts.app')

@section('content')
<div>
    <h2>Connexion administrateur</h2>
    <button class="links">
        <a href="{{ route('professors') }}">Créer un nouveau compte</a>
    </button>
    <button class="links">
        <a href="{{ route('receptioncde') }}">Saisir commande réceptionnée</a>
    </button>
</div>
@endsection 

<style>
.links > a {
    color: #636b6f;
    padding: 0 25px;
    font-size: 12px;
    font-weight: 600;
    letter-spacing: .1rem;
    text-decoration: none;
    text-transform: uppercase;
}
</style>