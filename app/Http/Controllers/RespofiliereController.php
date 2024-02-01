<?php

namespace App\Http\Controllers;


use App\Models\Incident; 
use App\Models\MessageP;

class RespofiliereController extends Controller
{
    public function dashboard()
    {
        $incidents = Incident::all(); 
        return view('respo.dashboard', compact('incidents'));
    }
}

