<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seccion extends Model
{
    use HasFactory;

    // Nombre de la tabla
    protected $table = 'secciones';

    // Clave primaria personalizada
    protected $primaryKey = 'id_seccion';

    // Los campos que se pueden asignar en masa
    protected $fillable = ['aforo', 'id_grado'];

    // Relación con Grado
    public function grado()
    {
        return $this->belongsTo(Grado::class, 'id_grado', 'id_grado');
    }

    // Relación con Estudiante
    public function estudiantes()
    {
        return $this->hasMany(Estudiante::class, 'id_seccion', 'id_seccion');
    }
}
