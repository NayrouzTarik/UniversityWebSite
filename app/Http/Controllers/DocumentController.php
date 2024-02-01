<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SelectedDocument;

class DocumentController extends Controller
{

    public function saveDocuments(Request $request)
    {
        $documents = $request->input('documents');

        foreach ($documents as $document) {
            SelectedDocument::create([
                'name' => $document['name'],
                'status' => $document['status'], 
            ]);
        }
        return response()->json(['message' => 'Documents saved successfully'], 200);
    }
}
