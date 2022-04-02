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
    return view('proprietaire.create');
});

Route::get('/list-proprietaire', function () {
    return view('proprietaire.index');
});


Route::post('/proprietaire/store', [ProprietaireController::class, 'store'])->name('proprietaire.store');

Route::get('/proprietaire', [ProprietaireController::class,'index'])->name('proprietaire.index');
Route::get('/proprietaire/create', [ProprietaireController::class,'create'])->name('proprietaire.create');
