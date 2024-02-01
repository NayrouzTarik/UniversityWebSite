<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message; 

class MessageEController extends Controller
{
    public function sendMessage(Request $request)
    {
        $validatedData = $request->validate([
            'recipient' => 'required|email',
            'message' => 'required|string',
        ]);
    
        $message = new Message;
        $message->recipient = $validatedData['recipient'];
        $message->message = $validatedData['message'];
        $message->save();
    
        return response()->json(['message' => 'Message saved successfully'], 200);
    }
    public function showMessageForm()
    {
        return view('etudiant.message');
    }    
}
