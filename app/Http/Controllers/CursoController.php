<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index()
    {
        $cursos = Curso::all();

        return view('cursos', compact('cursos'));
    }

    public function create()
    {
        return view('cursos-create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre_curso' => 'required',
            'codigo_curso' => 'required|unique:cursos',
            'creditos' => 'required|integer',
            'descripcion' => 'nullable'
        ]);

        Curso::create($request->all());

        return redirect()->route('cursos.index');
    }

    public function edit($id)
    {
        $curso = Curso::findOrFail($id);

        return view('cursos-edit', compact('curso'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre_curso' => 'required',
            'codigo_curso' => 'required|unique:cursos,codigo_curso,' . $id,
            'creditos' => 'required|integer',
            'descripcion' => 'nullable'
        ]);

        $curso = Curso::findOrFail($id);

        $curso->update($request->all());

        return redirect()->route('cursos.index');
    }

    public function destroy($id)
    {
        $curso = Curso::findOrFail($id);

        $curso->delete();

        return redirect()->route('cursos.index');
    }
}