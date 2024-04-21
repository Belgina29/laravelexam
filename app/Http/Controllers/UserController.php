<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Utilisateur;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function form_register(){
        return view('register');
    }

    public function form_login(Request $request){
        if($request->session()->get('utilisateur')){
            return redirect('/profil')->with('status', "Vous devez vous déconnecter avant de vous reconnecter");
        }
        return view('login');
    }

    public function traitement_register(Request $request){
        $request->validate([
            "name"=>"required|max:100",
            "email"=>"email|required|unique:utilisateurs",
            "password"=>"required|min:8",
        ]);

        $utilisateur = new Utilisateur();
        $utilisateur->name = $request->input('name');
        $utilisateur->email = $request->input('email');
        $utilisateur->password = bcrypt($request->input('password'));
        $utilisateur->save();

        return redirect ('/register')-> with('status', 'Bravo! Vous venez de rejoindre la team!!!');
    }

    public function traitement_login(Request $request){
        $request->validate([
            "name" => "required|max:100",
            "password" => "required|min:8",
        ]);

        $utilisateur = Utilisateur::where("name", $request->input('name'))->first();

        if ($utilisateur) {
            // Vérification du mot de passe
            if (Hash::check($request->input('password'), $utilisateur->password)) {
                // Authentification réussie, mettez l'utilisateur en session
                $request->session()->put('utilisateur', $utilisateur);

                // Redirection vers la page de profil
                return redirect('/profil');
            } else {
                // Mot de passe incorrect
                return back()->with('error', 'Nom d\'utilisateur ou mot de passe incorrect');
            }
        } else {
            // Utilisateur non trouvé
            return back()->with('error', 'OUPS! Vous n\'avez pas de compte');
        }
    }

}
