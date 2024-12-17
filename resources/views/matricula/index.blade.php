@extends('layout.layout')

@section('content')

<h1 class="my-4">Listado de Matrículas</h1>

<div class="table-responsive">
    <table class="table table-striped table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>Código</th>
                <th>Grado</th>
                <th>Sección</th>
                <th>Alumno</th>
            </tr>
        </thead>
        <tbody>
            @foreach($matriculas as $matricula)
            <tr>
                <td>{{ $matricula->id_matricula }}</td>
                <td>{{ $matricula->seccion->grado->id_grado }}</td>
                <td>{{ $matricula->seccion->id_seccion }}</td>
                <td>{{ $matricula->estudiante->nombres }} {{ $matricula->estudiante->apellidos }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
