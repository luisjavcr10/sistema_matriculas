<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    use HasFactory;

    // Nombre de la tabla
    protected $table = 'estudiantes';

    // Clave primaria personalizada
    protected $primaryKey = 'id_estudiante';

    // Los campos que se pueden asignar en masa
    protected $fillable = ['nombres', 'apellidos', 'id_seccion'];

    // Relación con Seccion
    public function seccion()
    {
        return $this->belongsTo(Seccion::class, 'id_seccion', 'id_seccion');
    }
}