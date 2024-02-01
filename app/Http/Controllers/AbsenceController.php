<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Absence;

class AbsenceController extends Controller
{
    public function saveAbsence(Request $request)
    {
        $validatedData = $request->validate([
            'date' => 'required|date',
            'justification' => 'required|string',
        ]);

        Absence::create($validatedData);

        return response()->json(['message' => 'Absence recorded successfully'], 200);
    }
}
