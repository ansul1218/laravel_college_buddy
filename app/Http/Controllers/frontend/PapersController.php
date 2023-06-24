<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\paper;
class PapersController extends Controller
{
    public function index(){

        $papers = Paper::all();
        return view('frontend.papers' , compact('papers'));
    }
}
