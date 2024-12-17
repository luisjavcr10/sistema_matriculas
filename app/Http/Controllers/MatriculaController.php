<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matricula;
use App\Models\Seccion;
use App\Models\Estudiante;


class MatriculaController extends Controller
{

    public function index()
    {
        $matriculas = Matricula::with(['estudiante', 'seccion'])->get(); // Carga las relaciones si las tienes
        return view('matricula.index', compact('matriculas'));
    }

    // Muestra el formulario de creación de matrícula
    public function create()
    {
        $secciones = Seccion::all();
        $estudiantes = Estudiante::all();
        return view('matricula.añadir', compact('secciones', 'estudiantes'));
    }

    // Maneja la solicitud de creación de matrícula


    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'nombres' => 'required|string|max:255',
            'apellidos' => 'required|string|max:255',
            'fecha' => 'required|date',
            'id_seccion' => 'required|exists:secciones,id_seccion',
        ]);

        // Crear el nuevo estudiante
        $estudiante = Estudiante::create([
            'nombres' => $request->nombres,
            'apellidos' => $request->apellidos,
            'id_seccion' => $request->id_seccion
        ]);

        // Crear la matrícula usando el nuevo estudiante
        Matricula::create([
            'fecha' => $request->fecha,
            'id_seccion' => $request->id_seccion,
            'id_estudiante' => $estudiante->id_estudiante,
        ]);

        // Redirigir o devolver una respuesta adecuada
        return redirect()->route('matriculas.index')->with('success', 'Matrícula creada exitosamente.');
    }
}
