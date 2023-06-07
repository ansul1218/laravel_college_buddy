<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\BooksController;
use App\Http\Controllers\frontend\NoteController;
use App\Http\Controllers\frontend\NotesController;
use App\Http\Controllers\frontend\PaperController;
use App\Http\Controllers\frontend\PapersController;
use App\Http\Controllers\frontend\StudylistController;
use App\Http\Controllers\frontend\paperdataController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class,'index']);
Route::get('/Books', [BooksController::class,'index']);
Route::get('/Note', [NoteController::class,'index']);
Route::get('/Notes', [NotesController::class,'index']);
Route::get('/Paper', [PaperController::class,'index']);
Route::get('/Papers', [PapersController::class,'index']);
Route::get('/Studylist', [StudylistController::class,'index']);

