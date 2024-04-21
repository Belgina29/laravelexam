<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function accueil(){
        return view('website.accueil');
    }

    public function profil(){
        return view('website.profil');
    }
}