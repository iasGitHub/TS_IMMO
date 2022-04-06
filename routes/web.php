<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuartierController;
use App\Http\Controllers\ProprieteController;
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

Route::get('/add-proprietaire', [ProprietaireController::class, 'create']);
Route::post('/proprietaire/store', [ProprietaireController::class, 'store'])->name('proprietaire.store');
Route::get('/proprietaire/create', [ProprietaireController::class,'create'])->name('proprietaire.create');
Route::get('/proprietaire', [ProprietaireController::class,'index'])->name('proprietaire.index');
Route::delete('/proprietaire/{proprietaire}', [ProprietaireController::class,'delete'])->name('proprietaire.delete');
Route::put('/proprietaire/{proprietaire}', [ProprietaireController::class,'update'])->name('proprietaire.update');
Route::get('/proprietaire/{proprietaire}', [ProprietaireController::class,'edit'])->name('proprietaire.edit');

//Quartier

Route::get('/add-quartier', [QuartierController::class, 'create']);
Route::post('/quartier/store', [QuartierController::class, 'store'])->name('quartier.store');
Route::get('/quartier/create', [QuartierController::class,'create'])->name('quartier.create');
Route::get('/quartier', [QuartierController::class,'index'])->name('quartier.index');
Route::delete('/quartier/{quartier}', [QuartierController::class,'delete'])->name('quartier.delete');
Route::put('/quartier/{quartier}', [QuartierController::class,'update'])->name('quartier.update');
Route::get('/quartier/{quartier}', [QuartierController::class,'edit'])->name('quartier.edit');

// Propriété

Route::get('/add-propriete', [ProprieteController::class, 'create']);
Route::post('/propriete/store', [ProprieteController::class, 'store'])->name('propriete.store');
Route::get('/propriete/create', [ProprieteController::class,'create'])->name('propriete.create');
Route::get('/propriete', [ProprieteController::class,'index'])->name('propriete.index');
Route::delete('/propriete/{propriete}', [ProprieteController::class,'delete'])->name('propriete.delete');
Route::put('/propriete/{propriete}', [ProprieteController::class,'update'])->name('propriete.update');
Route::get('/propriete/{propriete}', [ProprieteController::class,'edit'])->name('propriete.edit');








