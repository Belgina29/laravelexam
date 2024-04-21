@extends('layouts.app')

@section('title')
Authentification
@endsection

@section('content')
<div class="w3ls-login box box--big">
    <!-- form starts here -->
    <form action="/login/traitement" method="post">
        @csrf
        <div class="agile-field-txt">
            <label><i class="fa fa-user" aria-hidden="true"></i> Nom d'utlisateur </label>
            <input type="text" name="name" placeholder="Entrer le nom d'utlisateur " required="" />
        </div>
        <div class="agile-field-txt">
            <label><i class="fa fa-unlock-alt" aria-hidden="true"></i> Mot de passe </label>
            <input type="password" name="password" placeholder="Entrer le mot de passe" required="" id="myInput" />
            <div class="agile_label">
                <input id="check3" name="check3" type="checkbox" value="show password" onclick="myFunction()">
                <label class="check" for="check3">Voir mot de passe</label>
            </div>
            <div class="agile-right">
                <a href="#">Mot de passe oublié?</a>
            </div>
            <div class="agile-right">
                <a href="/register">Vous n'avez pas de compte? Créer un compte</a>
            </div>
        </div>
        <!-- script for show password -->
        <script>
            function myFunction() {
                var x = document.getElementById("myInput");
                if (x.type === "password") {
                    x.type = "text";
                } else {
                    x.type = "password";
                }
            }
        </script>
        <!-- //end script -->
        <input type="submit" value="CONNEXION">
    </form>
    @if (session('error'))
      <div class="alert alert-danger">
        {{ session('error') }}
      </div>
    @endif
</div>
@endsection
