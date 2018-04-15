@extends('layouts.app')

@section('content')
  <div>
    <h2> Connexion </h2>
    <ul>
      <label for="email" id="email"> Email: </label>
      <input type="textarea" name="email" id="email" required /><br><br>
      <label for="mdp" id="mdp"> Mot de passe: </label>
      <input type="password" name="mdp" id="mdp" required /><br><br>
      <button class="btnsimple">Se connecter </button>
    </ul>
  </div> 
@endsection 

<style>
  .btnsimple {
    font-style: italic;
    border-radius: 10px;
    background-color:dimgrey;
    margin-left: 300px;
  }
  label {
    display: inline-block;
    width: 175px;
  }
  input {
    display: inline;
    border-radius: 3px;
  }
</style>