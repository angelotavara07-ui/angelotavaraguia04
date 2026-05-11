<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Matricula;


class Profesor extends Model
{
    protected $primaryKey = 'id'; // opcional (es default)

    protected $fillable = [
        'nombre',
        'apellidos',
        'especialidad'
    ];

    public function matriculas(){
        return $this->hasMany(Matricula::class, 'id_profesor', 'id');
    }
}