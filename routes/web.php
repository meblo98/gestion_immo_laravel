<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BienController;
use App\Http\Controllers\CommentaireController;



    Route::get('/admin', [BienController::class, 'indexAdmin'])->name('admin')->middleware('Auth');
    Route::get('/admin2', [BienController::class, 'indexAdmin2'])->name('admin2');
    Route::get('/admin/bien', [BienController::class, 'indexBien'])->name('admin.bien');
    Route::get('admin/index4/{id}', [BienController::class, 'detailAdmin'])->name('detailadmin');
    Route::delete('/admin2/{id}', [BienController::class, 'destroy'])->name('delete');
    Route::get('/admin/bien/{id}/modifier', [BienController::class, 'edit'])->name('index3');
    Route::patch('/modifier/{id}', [BienController::class, 'modifier'])->name('modification');
    Route::post('/ajout/creation', [BienController::class, 'creation'])->name('creation');
    Route::get('/ajout', [BienController::class, 'ajout'])->name('ajout');



// Route::get('/',[CommentaireController::class,'commentaire']);
Route::get('/creation',[CommentaireController::class,'ajouter'])->name('commentaire.ajouter');
Route::get('/compte',[AuthController::class,'compte']);
Route::post('/compte',[AuthController::class,'creerCompte'])->name('User.creerCompte');

Route::get('/connexion',[AuthController::class,'connexion']);
Route::post('/connexion',[AuthController::class,'seconnexion'])->name('User.seconnexion');
Route::delete('/connexion',[AuthController::class,'deconnexion'])->name('User.deconnexion');



// routes des articles


Route::get('/', [BienController::class, 'index'])->name('accueil');
Route::get('/detail/{id}', [BienController::class, 'detail'])->name('detail');





Route::get('/commentaire',[CommentaireController::class,'commentaire']);
Route::get('/creation',[CommentaireController::class,'ajouter'])->name('commentaire.ajouter');

Route::get('/admin/commentaire',[CommentaireController::class,'indexCommentaire'])->name('admin.commentaire');
