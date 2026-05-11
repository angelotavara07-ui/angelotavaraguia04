<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Matricula;


class Alumno extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = ['nombre', 'apellidos', 'fecha_nacimiento', 'dni', 'direccion', 'telefono', 'email', 'estado_matricula'];

    public function matriculas(){
        return $this->hasMany(Matricula::class, 'id_alumno', 'id');
    }
}
