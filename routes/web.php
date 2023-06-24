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
use App\Http\Controllers\frontend\shownotesController;
use App\Http\Controllers\note_testController;
use App\Http\Controllers\paper_testController;
use App\Http\Controllers\PbooksTestController;

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
Route::get('/Notes-files', [NotesController::class,'index']);
Route::get('/Paper', [PaperController::class,'index']);
Route::get('/Papers-files', [PapersController::class,'index']);
Route::get('/Studylist', [StudylistController::class,'index']);


Route::get('/test-1', [note_testController::class, 'index'])->name('notes.index');
Route::post('/test-2', [note_testController::class, 'store'])->name('notes.store');




Route::get('/test-3', [paper_testController::class, 'index'])->name('papers.index');
Route::post('/test-4', [paper_testController::class, 'store'])->name('papers.store');



Route::get('/test-5', [PbooksTestController::class, 'index'])->name('test-5.index');
Route::post('/test-6', [PbooksTestController::class, 'store'])->name('test-5.store');


