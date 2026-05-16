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

    public function create()
    {
        return view('alumnos-create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'apellidos' => 'required',
            'fecha_nacimiento' => 'required',
            'dni' => 'required|unique:alumnos',
            'email' => 'required|email|unique:alumnos'
        ]);

        Alumno::create([
            'nombre' => $request->nombre,
            'apellidos' => $request->apellidos,
            'fecha_nacimiento' => $request->fecha_nacimiento,
            'dni' => $request->dni,
            'direccion' => $request->direccion,
            'telefono' => $request->telefono,
            'email' => $request->email,
            'estado_matricula' => $request->estado_matricula
        ]);

        return redirect()->route('alumnos.index');
    }

    public function edit($id)
    {
        $alumno = Alumno::findOrFail($id);

        return view('alumnos-edit', compact('alumno'));
    }

    public function update(Request $request, $id)
    {
        $alumno = Alumno::findOrFail($id);

        $request->validate([
            'nombre' => 'required',
            'apellidos' => 'required',
            'fecha_nacimiento' => 'required',
            'dni' => 'required|unique:alumnos,dni,' . $id,
            'email' => 'required|email|unique:alumnos,email,' . $id
        ]);

        $alumno->update([
            'nombre' => $request->nombre,
            'apellidos' => $request->apellidos,
            'fecha_nacimiento' => $request->fecha_nacimiento,
            'dni' => $request->dni,
            'direccion' => $request->direccion,
            'telefono' => $request->telefono,
            'email' => $request->email,
            'estado_matricula' => $request->estado_matricula
        ]);

        return redirect()->route('alumnos.index');
    }

    public function destroy($id)
    {
        $alumno = Alumno::findOrFail($id);

        $alumno->delete();

        return redirect()->route('alumnos.index');
    }
}