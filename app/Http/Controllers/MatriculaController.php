<?php

namespace App\Http\Controllers;

use App\Models\Matricula;
use App\Models\Alumno;
use App\Models\Curso;
use App\Models\Profesor;
use App\Models\Horario;

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

    public function create()
    {
        $alumnos = Alumno::all();
        $cursos = Curso::all();
        $profesores = Profesor::all();
        $horarios = Horario::with('curso')->get();

        return view('matriculas-create', compact(
            'alumnos',
            'cursos',
            'profesores',
            'horarios'
        ));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_alumno' => 'required',
            'id_curso' => 'required',
            'id_profesor' => 'nullable',
            'id_horario' => 'nullable',
            'semestre' => 'required',
            'fecha_matricula' => 'required',
            'nota_final' => 'nullable|numeric',
            'estado_matricula' => 'required'
        ]);

        Matricula::create($request->all());

        return redirect()->route('matriculas.index');
    }

    public function edit($id)
    {
        $matricula = Matricula::findOrFail($id);

        $alumnos = Alumno::all();
        $cursos = Curso::all();
        $profesores = Profesor::all();
        $horarios = Horario::with('curso')->get();

        return view('matriculas-edit', compact(
            'matricula',
            'alumnos',
            'cursos',
            'profesores',
            'horarios'
        ));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_alumno' => 'required',
            'id_curso' => 'required',
            'id_profesor' => 'nullable',
            'id_horario' => 'nullable',
            'semestre' => 'required',
            'fecha_matricula' => 'required',
            'nota_final' => 'nullable|numeric',
            'estado_matricula' => 'required'
        ]);

        $matricula = Matricula::findOrFail($id);

        $matricula->update($request->all());

        return redirect()->route('matriculas.index');
    }

    public function destroy($id)
    {
        $matricula = Matricula::findOrFail($id);

        $matricula->delete();

        return redirect()->route('matriculas.index');
    }
}