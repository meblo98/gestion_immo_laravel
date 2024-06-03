<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BienController;

Route::get('/', function () {
    return view('welcome');
});

// routes des articles

Route::get('/', [BienController::class, 'index']);
Route::get('/detail/{id}', [BienController::class, 'detail'])->name('detail');


Route::get('/ajout', [BienController::class, 'ajout'])->name('ajout');
Route::post('/ajout/creation', [BienController::class, 'creation'])->name('creation');
