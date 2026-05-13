<?php

namespace App\Http\Controllers;

use App\Models\Matricula;
use Illuminate\Http\Request;

class MatriculaController extends Controller
{
    public function index()
    {
        $matriculas = Matricula::with([
            'alumno',
            'curso',
            'profesor',
            'horario'
        ])->get();

        return view('matriculas', compact('matriculas'));
    }
}