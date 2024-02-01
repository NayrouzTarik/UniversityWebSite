<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TP;

class TPController extends Controller
{
    public function saveTp(Request $request)
    {
        $validatedData = $request->validate([
            'matiere' => 'required',
            'teammates' => 'required',
            'file' => 'required|file',
        ]);

        $filePath = $request->file('file')->store('tps', 'public');

        $tp = new TP($validatedData);
        $tp->file_path = $filePath;
        $tp->save();

        return response()->json(['message' => 'TP saved successfully']);
    }
    public function showTps()
    {
        $tps = Tp::all();
        return view('Prof.blade', compact('tps'));
    }
}
