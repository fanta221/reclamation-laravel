<?php
use App\Http\Controllers\ReclamationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "OK système réclamation";
});

Route::get('/reclamations', [ReclamationController::class, 'index']);
Route::post('/reclamations', [ReclamationController::class, 'store'])->name('reclamations.store');

Route::get('/reclamations/valider/{id}', [ReclamationController::class, 'valider'])->name('reclamations.valider');
Route::get('/reclamations/rejeter/{id}', [ReclamationController::class, 'rejeter'])->name('reclamations.rejeter');

Route::get('/admin', [ReclamationController::class, 'admin'])->name('reclamations.admin');