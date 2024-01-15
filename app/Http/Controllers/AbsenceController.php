<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AbsenceController extends Controller
{
    public function submitAbsence(Request $request)
    {
        $date = $request->input('date');
        $justification = $request->input('justification');

        // Store the absence data (you can use a database, file, or session to store data)
        // For now, let's just use session to store data temporarily

        $absences = $request->session()->get('absences', []);
        $absences[] = [
            'date' => $date,
            'justification' => $justification,
        ];
        $request->session()->put('absences', $absences);

        return response()->json(['success' => true]);
    }
    public function getAbsences(Request $request)
    {
        // Fetch absence data from where it is stored (e.g., database, file)
        // For now, let's fetch it from the session

        $absences = $request->session()->get('absences', []);

        return response()->json($absences);
    }
}
