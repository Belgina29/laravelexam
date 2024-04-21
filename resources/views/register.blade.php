@extends('layouts.app')

@section('title')
Créer un compte
@endsection

@section('content')
<div class="w3ls-login box box--big">
    <!-- form starts here -->
    <form action="/register/traitement" method="post">
        @csrf
        <div class="agile-field-txt">
            <label><i class="fa fa-user" aria-hidden="true"></i> Nom d'utilisateur </label>
            <input type="text" name="name" placeholder="Entrer le nom d'utilisateur" required="" />
        </div>
        <div class="agile-field-txt">
            <label><i class="fa fa-user" aria-hidden="true"></i> Email </label>
            <input type="text" name="email" placeholder="Entrer le mail" required="" />
        </div>
        <div class="agile-field-txt">
            <label><i class="fa fa-unlock-alt" aria-hidden="true"></i> Mot de passe </label>
            <input type="password" name="password" placeholder="Entrer le mot de passe" required="" id="myInput" />
            <input type="password" name="confirm_password" placeholder="Confirmer le mot de passe" required="" id="myInput" />
            <div class="agile_label">
                <input id="check3" name="check3" type="checkbox" value="show password" onclick="myFunction()">
                <label class="check" for="check3">Voir le mot de passe</label>
            </div>
            <div class="agile-right">
                <a href="/login">Vous avez déjà un compte? Se connecter</a>
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
        <input type="submit" value="CREER">
    </form>
        @if (session('status'))
          <a href="#">{{ session('status')}}</a>
         @endif
</div>
@endsection
