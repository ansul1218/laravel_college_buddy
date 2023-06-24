<?php

namespace App\Http\Controllers;
use App\Models\paper;
use Illuminate\Http\Request;

class paper_testController extends Controller
{
    public function index()
    {
        $papers = Paper::all();
        return view('papers.index', compact('papers'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'file_name' => 'required',
            'department' => 'required',
            'subject' => 'required',
            'semester' => 'required',
            'year' => 'required',
            'system' => 'required',
            'file' => 'required|mimes:pdf,doc,docx,ppt,pptx',
        ]);

        $file = $request->file('file');
        $fileName = $file->getClientOriginalName();
        $filePath = 'papers/' . $fileName;
        $file->move(public_path('papers'), $fileName);
        Paper::create([
            'file_name' => $request->file_name,
            'department' => $request->department,
            'subject' => $request->subject,
            'semester' => $request->semester,
            'year' => $request->year,
            'system' => $request->system,
            'file_path' => $filePath,
        ]);

        return redirect()->route('papers.index')->with('success', 'Paper created successfully.');
    }
}
