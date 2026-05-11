<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Matricula;
use App\Models\Horario;

class Curso extends Model
{
    protected $primaryKey = 'id';

    protected $fillable = [
        'nombre_curso',
        'codigo_curso',
        'creditos',
        'descripcion'
    ];

    public function matriculas(){
        return $this->hasMany(Matricula::class, 'id_curso', 'id');
    }

    public function horarios(){
        return $this->hasMany(Horario::class, 'id_curso', 'id');
    }
}
