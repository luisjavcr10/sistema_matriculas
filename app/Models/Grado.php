<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grado extends Model
{
    use HasFactory;

    // Nombre de la tabla (si es diferente al nombre del modelo en plural)
    protected $table = 'grados';

    // Clave primaria personalizada
    protected $primaryKey = 'id_grado';

    // Los campos que se pueden asignar en masa
    protected $fillable = ['descripcion'];

    // Relación con Seccion
    public function secciones()
    {
        return $this->hasMany(Seccion::class, 'id_grado', 'id_grado');
    }
}
