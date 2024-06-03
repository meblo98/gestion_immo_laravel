<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CommentaireController;
use Illuminate\Support\Facades\Route;

Route::get('/',[CommentaireController::class,'commentaire']);
Route::get('/creation',[CommentaireController::class,'ajouter'])->name('commentaire.ajouter');
Route::post('/ajoute',[AdminController::class,'ajouter'])->name('User.creation');