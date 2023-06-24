<?php

namespace App\Http\Controllers;

use App\Models\Pbook;
use Illuminate\Http\Request;

class PbooksTestController extends Controller
{
    public function index()
    {
        $pbooks = Pbook::all();
        return view('pbooks.index', compact('pbooks'));
    }

    public function create()
    {
        return view('pbooks.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'language' => 'required',
            'file' => 'required|mimes:pdf,doc,docx,ppt,pptx',
        ]);

        $file = $request->file('file');
        $fileName = $file->getClientOriginalName();
        $filePath = 'pbooks/' . $fileName;
        $file->move(public_path('pbooks'), $fileName);

        Pbook::create([
            'name' => $request->input('name'),
            'language' => $request->input('language'),
            'file_path' => $filePath,
        ]);

        return redirect()->route('test-5.index')->with('success', 'Pbook created successfully.');
    }
}
