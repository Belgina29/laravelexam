<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WebsiteController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get("/", [WebsiteController::class, "accueil"])->name('website.accueil');

Route::get('/', [SiteController::class, 'accueil'])->name('accueil');
Route::get('/register', [UserController::class, 'form_register']);
Route::get('/login', [UserController::class, 'form_login']);

Route::post('/register/traitement', [UserController::class, 'traitement_register']);
Route::post('/login/traitement', [UserController::class, 'traitement_login']);
Route::get('/profil', function(){ return view('website.profil'); });
Route::get('/logout', [UserController::class, 'logout']);

