<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pbook;

class BooksController extends Controller
{
    public function index(){
        $pbooks = Pbook::all();
        return view('frontend.books', compact('pbooks'));
    }
}
