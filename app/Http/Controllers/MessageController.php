<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MessageP; 

class MessageController extends Controller
{
    public function index()
    {
        $messages = MessageP::all();
        return view('messages.index', compact('messages'));
    }
}

