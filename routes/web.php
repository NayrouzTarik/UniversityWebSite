<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\EtudiantController;

Route::get('/', [MainController::class, 'index'])->name('main');

Route::get('/login', function () {
    return view('login.login');
})->name('login.show');

// Add the layout route to EtudiantController
Route::get('/layout', [EtudiantController::class, 'showLayout'])->name('layout');

// Add routes for other actions in EtudiantController
Route::get('/emploi', [EtudiantController::class, 'emploi'])->name('emploi');
Route::get('/annonce', [EtudiantController::class, 'annonce'])->name('annonce');
Route::get('/demandes', [EtudiantController::class, 'demandes'])->name('demandes');
Route::get('/absence', [EtudiantController::class, 'absence'])->name('absence');
Route::get('/Tp', [EtudiantController::class, 'Tp'])->name('Tp');
Route::get('/incident', [EtudiantController::class, 'incident'])->name('incident');

Route::get('/incident', [EtudiantController::class, 'incident'])->name('incident');



