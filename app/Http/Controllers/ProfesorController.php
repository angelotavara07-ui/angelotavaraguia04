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

    public function create()
{
    return view('profesores-create');
}

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'apellidos' => 'required',
            'especialidad' => 'required'
        ]);

        Profesor::create($request->all());

        return redirect()->route('profesores.index');
    }

    public function edit($id)
{
    $profesor = Profesor::findOrFail($id);

    return view('profesores-edit', compact('profesor'));
}

    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required',
            'apellidos' => 'required',
            'especialidad' => 'required'
        ]);

        $profesor = Profesor::findOrFail($id);

        $profesor->update($request->all());

        return redirect()->route('profesores.index');
    }

    public function destroy($id)
    {
        $profesor = Profesor::findOrFail($id);

        $profesor->delete();

        return redirect()->route('profesores.index');
    }
}