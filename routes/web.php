<?php

use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\ProfesorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HorarioController;
use App\Http\Controllers\MatriculaController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
    return view('welcome');
});

// CRUDs
Route::resource('alumnos', AlumnoController::class);
Route::resource('cursos', CursoController::class);
Route::resource('profesores', ProfesorController::class);
Route::resource('horarios', HorarioController::class);
Route::resource('matriculas', MatriculaController::class);

Route::get('login/github',
[App\Http\Controllers\Auth\LoginController::class, 'redirectToGithub']);

Route::get('login/github/callback',
[App\Http\Controllers\Auth\LoginController::class, 'handleGithubCallback']);

Auth::routes();


Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::get('login/google', [LoginController::class, 'redirectToGoogle']);
Route::get('login/google/callback', [LoginController::class, 'handleGoogleCallback']);


Route::middleware(['auth'])->get('/dashboard', function () {
    return view('dashboard');
});