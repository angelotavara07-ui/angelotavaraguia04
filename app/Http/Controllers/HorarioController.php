<?php

namespace App\Http\Controllers;

use App\Models\Horario;
use App\Models\Curso;
use Illuminate\Http\Request;

class HorarioController extends Controller
{
    public function index()
    {
        $horarios = Horario::with('curso')->get();

        return view('horarios', compact('horarios'));
    }

    public function create()
    {
        $cursos = Curso::all();

        return view('horarios-create', compact('cursos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_curso' => 'required',
            'dia_semana' => 'required',
            'hora_inicio' => 'required',
            'hora_fin' => 'required'
        ]);

        Horario::create($request->all());

        return redirect()->route('horarios.index');
    }

    public function edit($id)
    {
        $horario = Horario::findOrFail($id);

        $cursos = Curso::all();

        return view('horarios-edit', compact('horario', 'cursos'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_curso' => 'required',
            'dia_semana' => 'required',
            'hora_inicio' => 'required',
            'hora_fin' => 'required'
        ]);

        $horario = Horario::findOrFail($id);

        $horario->update($request->all());

        return redirect()->route('horarios.index');
    }

    public function destroy($id)
    {
        $horario = Horario::findOrFail($id);

        $horario->delete();

        return redirect()->route('horarios.index');
    }
}