<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BienController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CommentaireController;


Route::get('/', function () {
    return view('welcome');
});

// routes des articles
Route::get('/admin', [BienController::class, 'indexAdmin']);
Route::get('/', [BienController::class, 'index']);
Route::get('/detail/{id}', [BienController::class, 'detail'])->name('detail');
Route::get('/admin/{id}/modifier', [BienController::class, 'modifier'])->name('modifier');
Route::delete('/admin/{id}', [BienController::class, 'destroy'])->name('delete');

// ('/detail/{id}/modifier', [BienController::class, 'modifier'])->name('modifier');

Route::get('/ajout', [BienController::class, 'ajout'])->name('ajout');
Route::post('/ajout/creation', [BienController::class, 'creation'])->name('creation');

Route::get('/commentaire',[CommentaireController::class,'commentaire']);
Route::get('/creation',[CommentaireController::class,'ajouter'])->name('commentaire.ajouter');

