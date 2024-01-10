<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Document;

class DocumentController extends Controller
{
    public function index()
    {
        $documents = Document::paginate(5);
        return view('admin.document', compact('documents'));
        // Change the number based on your preference
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'coquanbh' => 'required',
            'document' => 'required|mimes:pdf,doc,docx,',
        ]);

        $documentName = $request->file('document')->getClientOriginalName();
        $filePath = $request->file('document')->storeAs('documents', $documentName, 'public');

        Document::create([
            'name' => $request->input('name'),
            'coquanbh' => $request->input('coquanbh'),
            'file_path' => $filePath,
        ]);

        return redirect()->route('admin.document');
    }

    public function download($id)
    {
        $document = Document::findOrFail($id);
        return response()->download(storage_path('app/public/' . $document->file_path), $document->name);
    }
}
