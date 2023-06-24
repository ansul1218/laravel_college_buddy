<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class note_testController extends Controller
{
    public function index()
    {
        $notes = Note::all();
        return view('notes.index', compact('notes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'file_name' => 'required',
            'department' => 'required',
            'semester' => 'required',
            'subject' => 'required',
            'file' => 'required|mimes:pdf,doc,docx,ppt,pptx',
        ]);

        $file = $request->file('file');
        $fileName = $file->getClientOriginalName();
        $filePath = 'notes/' . $fileName;

        $file->move(public_path('notes'), $fileName);

        Note::create([
            'file_name' => $request->file_name,
            'department' => $request->department,
            'semester' => $request->semester,
            'subject' => $request->subject,
            'file_path' => $filePath,
        ]);

        return redirect()->back()->with('success', 'Note uploaded successfully.');
    }
}


