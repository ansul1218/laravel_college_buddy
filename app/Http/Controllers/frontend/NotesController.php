<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Note;

class NotesController extends Controller
{
    public function index(){

        $notes = Note::all();
        return view('frontend.notes', compact('notes'));
    }
}
