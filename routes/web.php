<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\RespofiliereController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ProfesseurController;
use App\Http\Controllers\FiliereController;
use App\Http\Controllers\AbsenceController;
use App\Models\MessageP; 
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\TPController;
use App\Http\Controllers\IncidentController;
use App\Http\Controllers\MessageEController;



Route::get('/emploi', [FiliereController::class, 'showEmploi'])->name('emploi.show');
Route::get('/prof/dashboard', [ProfesseurController::class, 'dashboard'])->name('prof.dashboard');

Route::get('/', function () {
    return view('welcome');
});
Route::get('/news1', function () {
    return view('news.news1');
});
Route::get('/news2', function () {
    return view('news.news2');
});
Route::get('/news3', function () {
    return view('news.news3');
});

Route::get('login', function () {
    return view('auth.login');
})->name('login');

Route::post('login', 'App\Http\Controllers\LoginController@login');

Route::get('/aboutus/aboutus', [AboutUsController::class, 'index'])->name('aboutus');
Route::get('/services/services', [AboutUsController::class, 'showServices'])->name('services.show');
Route::get('/contact/contact', [AboutUsController::class, 'showContact'])->name('contact.show');
Route::get('/help/help', [AboutUsController::class, 'showHelp'])->name('help.show');

Route::middleware(['auth'])->group(function () {
    Route::get('dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard');
    Route::get('profile', 'App\Http\Controllers\ProfileController@index')->name('profile');
    
    Route::get('/etudiant/dashboard', [EtudiantController::class, 'dashboard'])->name('etudiant.dashboard');
    Route::get('/emploi', [FiliereController::class, 'index'])->name('emploi');
    
    Route::get('/annonce', function () {
        $messages = MessageP::all();
        return view('etudiant.Annonces', compact('messages'));
    })->name('annonce');
    
    Route::get('/demandes', function () {
        return view('etudiant.Demandes');
    })->name('demandes');
    Route::match(['get', 'post'], '/save-documents', [DocumentController::class, 'saveDocuments']);
    
    Route::get('/message-aux-profs', function () {
        return view('etudiant.Message');
    })->name('message-aux-profs');
    Route::post('/send-message', [MessageEController::class, 'store'])->name('message.send');


Route::get('/absence', function () {
    return view('etudiant.Abscences');
})->name('absence');
Route::match(['get', 'post'], '/save-absence', [AbsenceController::class, 'saveAbsence']);

Route::get('/tp', function () {
    return view('etudiant.Tp');
})->name('tp');
Route::post('/save-tp', [TPController::class, 'saveTp']);

Route::get('/incident', function () {
    return view('etudiant.Incident');
})->name('incident');
Route::match(['get', 'post'], '/submit-incident', [IncidentController::class, 'store'])->name('submit-incident');

Route::group(['middleware' => ['auth', 'professeur']], function () {
    Route::get('/professeur/dashboard', 'ProfesseurController@dashboard');
    Route::post('/send-message', [ProfesseurController::class, 'sendMessage'])->name('send.message');
});

Route::group(['middleware' => ['auth']], function () {
    Route::get('respo/dashboard', [RespofiliereController::class, 'dashboard']);
});

});
