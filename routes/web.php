<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;

Route::get('/', function () {
    return view('welcome');
});


// Additional routes that do not require authentication
Route::get('login', function () {
    return view('auth.login');
})->name('login');

Route::post('login', 'App\Http\Controllers\LoginController@login');


// Middleware group for authenticated users
Route::middleware(['auth'])->group(function () {
    // Routes accessible only to authenticated users
    Route::get('dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard');
    Route::get('profile', 'App\Http\Controllers\ProfileController@index')->name('profile');

   // Etudiant routes
Route::get('/etudiant/dashboard', [EtudiantController::class, 'dashboard'])->name('etudiant.dashboard');
Route::get('/emploi', function () {
    return view('etudiant.Emploi');
})->name('emploi');

Route::get('/annonce', function () {
    return view('etudiant.Annonces');
})->name('annonce');

Route::get('/demandes', function () {
    return view('etudiant.Demandes');
})->name('demandes');

Route::get('/absence', function () {
    return view('etudiant.Abscences');
})->name('absence');

Route::get('/tp', function () {
    return view('etudiant.Tp');
})->name('tp');

Route::get('/incident', function () {
    return view('etudiant.Incident');
})->name('incident');


// Professeur routes
Route::group(['middleware' => ['auth', 'professeur']], function () {
    Route::get('/professeur/dashboard', 'ProfesseurController@dashboard');
    // Add other professeur routes...
});

// Responsable de Filiere routes
Route::group(['middleware' => ['auth', 'responsable-filiere']], function () {
    Route::get('/responsable-filiere/dashboard', 'ResponsableFiliereController@dashboard');
    // Add other responsable-filiere routes...
});

// Chef de Departement routes
Route::group(['middleware' => ['auth', 'chef-de-departement']], function () {
    Route::get('/chef-de-departement/dashboard', 'ChefDepartementController@dashboard');
    // Add other chef-de-departement routes...
});

// Responsable Service Pédagogique routes
Route::group(['middleware' => ['auth', 'responsable-pedagogique']], function () {
    Route::get('/responsable-pedagogique/dashboard', 'ResponsablePedagogiqueController@dashboard');
    // Add other responsable-pedagogique routes...
});
    // Add other role-based routes here
});
