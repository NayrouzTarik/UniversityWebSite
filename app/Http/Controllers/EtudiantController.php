<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etudiant;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;


class EtudiantController extends Controller
{
    public function showLayout()
    {
        return view('layout');
    }
    public function emploi()
    {
        $user = Auth::user(); 

        return view('Emploi', ['user' => $user]);
    }

    public function annonce()
    {
        return view('Annonce');
    }

    public function demandes()
    {
        return view('Demandes');
    }

    public function absence()
    {
        return view('Absence');
    }

    public function Tp()
    {
        return view('Tp');
    }

    public function incident()
    {
        return view('incident');
    }
    public function index()
    {
        $etudiants = Etudiant::all(); // Retrieve all etudiants from the database
        return view('etudiants.index', compact('etudiants'));
    }

    public function create()
    {
        return view('etudiants.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:students,email',
            'adress' => 'required',
            'mobile' => 'required',
            'password' => 'required|alpha_num|min:6', 
        ]);

        $validatedData['password'] = bcrypt($request->password);
        Etudiant::create($validatedData);

        return redirect()->route('etudiants.index');
    }


    public function show($id)
    {
        $etudiant = Etudiant::findOrFail($id); 
        return view('etudiants.show', compact('etudiant'));
    }

    public function edit($id)
    {
        $etudiant = Etudiant::findOrFail($id); 
        return view('etudiants.edit', compact('etudiant'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            
        ]);
        Etudiant::findOrFail($id)->update($validatedData);

        return redirect()->route('etudiants.index');
    }

    public function destroy($id)
    {
        Etudiant::findOrFail($id)->delete();

        return redirect()->route('etudiants.index');
    }
}