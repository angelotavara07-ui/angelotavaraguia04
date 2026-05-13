<?php

namespace App\Http\Controllers;

use App\Models\Horario;
use Illuminate\Http\Request;

class HorarioController extends Controller
{
    public function index()
    {
        $horarios = Horario::with('curso')->get();

        return view('horarios', compact('horarios'));
    }
}