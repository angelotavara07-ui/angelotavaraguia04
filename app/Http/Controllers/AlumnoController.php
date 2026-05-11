<?php

namespace App\Http\Controllers;
use App\Models\Alumno;


use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    public function index()
{
    $alumnos = Alumno::all(); 
    return view('alumnos', compact('alumnos'));
}
}
