<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;


class TPController extends Controller
{
    public function index()
    {
        return view('tp.index');
    }

    public function submitTeam(Request $request)
    {
        $matiere = $request->input('matiere');
        $teammates = $request->input('teammates');

        Log::info("Team submitted:\nMatiere: $matiere\nTeammates: $teammates");

        return response()->json([
            'matiere' => $matiere,
            'teammates' => $teammates
        ]);
    }
    
    public function fetchMessages(Request $request)
    {
        try 
        {
            $messages = []; 

            return response()->json(['messages' => $messages]);
        } 
        catch (\Exception $e) 
        {
            Log::error('Error fetching messages: ' . $e->getMessage());

            return response()->json(['error' => 'Error fetching messages'], 500);
        }
    }
}