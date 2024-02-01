<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Filiere;

class FiliereController extends Controller
{
    public function index()
    {
        $filieres = Filiere::all();
        return view('etudiant.Emploi', compact('filieres'));
    }

    public function getEmploiDuTemps()
    {
        $filieres = Filiere::all();
        return response()->json(['content' => $filieres]);
    }
     
    public function showEmploi()
    {
        $filieres = Filiere::all(); 
        return view('emploi', ['filieres' => $filieres]);
    }
}
