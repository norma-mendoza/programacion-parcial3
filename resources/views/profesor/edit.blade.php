@extends('layout.app')
@section('title','Docente')
@section('content')
<div class="container">
    <h1>Informe de notas</h1>
    <table class="table table-responsive-sm table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Estudiantes</th>
                <th>Nota 1</th>
                <th>Nota 2</th>
                <th>Nota 3</th>
                <th>Nota 4</th>
                <th>Parcial</th>
                <th>Promedio</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($estudiantes as $estudiante)
                
            <tr>
                <td>{{ $estudiante->id }}</td>
                <td>{{ $estudiante->nombre }}</td>
                <form action="{{ route('nota.update',[$estudiante->nota_id,$estudiante->curso_id]) }}" method="POST">
                    @csrf @method('PUT')
                    <td><input name="nota1" type="number" step="0.01" min="0" max="10" value="{{ $estudiante->nota1 }}"></td>
                    <td><input name="nota2" type="number" step="0.01" min="0" max="10" value="{{ $estudiante->nota2 }}"></td>
                    <td><input name="nota3" type="number" step="0.01" min="0" max="10" value="{{ $estudiante->nota3 }}"></td>
                    <td><input name="nota4" type="number" step="0.01" min="0" max="10" value="{{ $estudiante->nota4 }}"></td>
                    <td><input name="parcial" type="number" step="0.01" min="0" max="10" value="{{ $estudiante->parcial }}"></td>
                    <td>{{ $estudiante->promedio }}</td>
                    <td>
                        <button type="submit" class="btn btn-outline-success">Actualizar</a>
                    </td>
                </form>
                
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection