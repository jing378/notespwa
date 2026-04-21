<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\AuthController;

// Route::get('/', function () {
//     return view('auth.login');
// })->name('login');
// Route::get('/index/home', [NoteController::class, 'index'])->name('notes.index');
// Route::get('/showNote', [NoteController::class, 'showNotes'])->name('notes.showNote');
// Route::post('/notes', [NoteController::class, 'store']);
// Route::put('/notes/{note}', [NoteController::class, 'update']);
// Route::delete('/notes/{note}', [NoteController::class, 'destroy']);

Route::post('/notes', [NoteController::class, 'store']);
Route::delete('/notes/{note}', [NoteController::class, 'destroy']);
Route::get('/register', [App\Http\Controllers\AuthController::class, 'register'])->name('register');
Route::post('/register', [App\Http\Controllers\AuthController::class, 'registerUser'])->name('register.store');
Route::get('/', function () {
    return view('auth.login');
})->name('login');
Route::post('/', [App\Http\Controllers\AuthController::class, 'loginUser'])->name('login');
Route::get('/dashboard', [NoteController::class, 'dashboard'])->name('notes.dashboard')->middleware('auth');
Route::get('/dashboard', [App\Http\Controllers\NoteController::class, 'dashboard'])
->middleware('auth')
->name('notes.dashboard');
Route::post('/logout', [App\Http\Controllers\AuthController::class, 'logout'])->name('logout');