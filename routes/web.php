<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProprietaireController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

//Proprietaire
Route::get('/add-proprietaire', function () {
    return view('proprietaire.add');
});

Route::post('/proprietaire', [ProprietaireController::class, 'store'])->name('proprietaire.store');