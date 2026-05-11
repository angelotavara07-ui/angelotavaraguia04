<?php

namespace App\Http\Controllers;
use App\Models\Profesor;
use Illuminate\Http\Request;

class ProfesorController extends Controller
{
    
public function index()
{
    $profesores = Profesor::all();
    return view('profesores', compact('profesores'));
}
}
