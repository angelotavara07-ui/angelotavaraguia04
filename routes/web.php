<?php

use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\ProfesorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
    return view('welcome');
});

// CRUDs
Route::get('/alumnos', [AlumnoController::class, 'index'])->name('alumnos.index');
Route::get('/cursos', [CursoController::class, 'index'])->name('cursos.index');
Route::get('/profesores', [ProfesorController::class, 'index'])->name('profesores.index');


Auth::routes();


Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::get('login/google', [LoginController::class, 'redirectToGoogle']);
Route::get('login/google/callback', [LoginController::class, 'handleGoogleCallback']);


Route::middleware(['auth'])->get('/dashboard', function () {
    return view('dashboard');
});