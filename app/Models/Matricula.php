<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matricula extends Model
{
    use HasFactory;

    // Nombre de la tabla
    protected $table = 'matricula';

    // Clave primaria personalizada
    protected $primaryKey = 'id_matricula';

    // Los campos que se pueden asignar en masa
    protected $fillable = ['fecha', 'id_seccion', 'id_estudiante'];

    // Relación con Seccion
    public function seccion()
    {
        return $this->belongsTo(Seccion::class, 'id_seccion', 'id_seccion');
    }

    // Relación con Estudiante
    public function estudiante()
    {
        return $this->belongsTo(Estudiante::class, 'id_estudiante', 'id_estudiante');
    }
}
