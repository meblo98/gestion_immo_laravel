<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BienController;
use App\Http\Controllers\AdminController;
use Illuminate\Auth\Middleware\Authenticate;
use App\Http\Controllers\CommentaireController;


Route::get('/',[CommentaireController::class,'commentaire']);
Route::get('/creation',[CommentaireController::class,'ajouter'])->name('commentaire.ajouter');
Route::get('/compte',[AuthController::class,'compte']);
Route::post('/compte',[AuthController::class,'creerCompte'])->name('User.creerCompte');

Route::get('/connexion',[AuthController::class,'connexion']);
Route::post('/connexion',[AuthController::class,'seconnexion'])->name('User.seconnexion');
Route::delete('/deconnexion',[AuthController::class,'deconnexion'])->name('User.deconnexion');



// routes des articles
Route::get('/admin', [BienController::class, 'indexAdmin'])->name('admin');
Route::get('/admin/bien', [BienController::class, 'indexBien'])->name('admin.bien');
Route::get('/', [BienController::class, 'index']);
Route::get('/detail/{id}', [BienController::class, 'detail'])->name('detail');
Route::get('/admin/{id}/modifier', [BienController::class, 'modifier'])->name('modifier');
Route::delete('/admin/bien/{id}', [BienController::class, 'destroy'])->name('delete');

Route::post('/admin/bien/{id}/modifier', [BienController::class, 'modifier'])->name('modifier');

Route::get('/ajout', [BienController::class, 'ajout'])->name('ajout');

Route::post('/ajout/creation', [BienController::class, 'creation'])->name('creation');

Route::get('/commentaire',[CommentaireController::class,'commentaire']);
Route::get('/creation',[CommentaireController::class,'ajouter'])->name('commentaire.ajouter');

Route::get('/admin/commentaire',[CommentaireController::class,'indexcommentaire'])->name('admin.commentaire');