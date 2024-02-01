<?php

namespace App\Http\Controllers;

use App\Models\Incident;
use Illuminate\Http\Request;

class IncidentController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'incidentType' => 'required',
            'description' => 'required',
            'date' => 'required',
            'time' => 'required',
            'department' => 'required',
            'class' => 'required',
        ]);

        $incident = new Incident;

        $incident->incident_type = $request->input('incidentType');
        $incident->description = $validated['description'];
        $incident->date = $validated['date'];
        $incident->time = $validated['time'];
        $incident->department = $validated['department'];
        $incident->class = $request->input('class');
  
        $incident->save();

        return redirect()->back()->with('success', 'Incident signalé avec succès.');
    }
    public function showIncidents()
    {
        $incidents = Incident::all();
        return view('Respo.blade', compact('incidents'));
    }
}
