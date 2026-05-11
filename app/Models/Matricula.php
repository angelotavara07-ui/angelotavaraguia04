<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Alumno;
use App\Models\Curso;
use App\Models\Horario;
use App\Models\Profesor;

class Matricula extends Model
{
    protected $primaryKey = 'id_matricula';
    protected $fillable = ['id_alumno', 'id_curso', 'id_profesor', 'id_horario', 'semestre', 'fecha_matricula', 'nota_final', 'estado_matricula'];

    public function alumno(){
        return $this->belongsTo(Alumno::class, 'id_alumno', 'id');
    }
    public function curso(){
        return $this->belongsTo(Curso::class, 'id_curso', 'id');
    }
    
    public function horario(){
        return $this->belongsTo(Horario::class, 'id_horario', 'id_horario');
    }
    public function profesor(){
        return $this->belongsTo(Profesor::class, 'id_profesor', 'id');
    }
}
