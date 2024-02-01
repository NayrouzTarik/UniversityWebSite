<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MessageP;
use App\Models\TP;


class ProfesseurController extends Controller
{

    public function dashboard()
    {
        $tpsInfo = TP::all();

        return view('prof.dashboard', compact('tpsInfo'));
    }

    public function sendMessage(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'message' => 'required|string',
        ]);
        MessageP::create([
            'nom' => $request->nom,
            'message' => $request->message,
        ]);
        if ($request->wantsJson()) {
            return response()->json(['success' => 'Message sent successfully']);
        }
        return redirect()->back()->with('success', 'Message sent successfully');
    }
}

