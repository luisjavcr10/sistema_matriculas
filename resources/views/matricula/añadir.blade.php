@extends('layout.layout')

@section('content')

<div class="container">
    <h1>Crear Matrícula</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('matriculas.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="fecha">Fecha de Matrícula</label>
            <input type="date" name="fecha" id="fecha" class="form-control" value="{{ old('fecha') }}" required>
        </div>

        <div class="form-group">
            <label for="id_seccion">Sección</label>
            <select name="id_seccion" id="id_seccion" class="form-control" required>
                <option value="">Seleccione una sección</option>
                @foreach($secciones as $seccion)
                    <option value="{{ $seccion->id_seccion }}" {{ old('id_seccion') == $seccion->id_seccion ? 'selected' : '' }}>
                        {{ $seccion->grado->descripcion }} - Sección {{ $seccion->id_seccion }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="nombres">Nombres</label>
            <input type="text" name="nombres" id="nombres" class="form-control" value="{{ old('nombres') }}" required>
        </div>

        <div class="form-group">
            <label for="apellidos">Apellidos</label>
            <input type="text" name="apellidos" id="apellidos" class="form-control" value="{{ old('apellidos') }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Crear Matrícula</button>
    </form>
</div>


@endsection