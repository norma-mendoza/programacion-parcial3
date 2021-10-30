@extends('layout.app')
@section('title','Docente')
@section('content')
<div class="container">
    @if ($estudiantes->isNotEmpty())
    <h1>Informe de notas</h1>
    <table class="table table-responsive-sm table-striped" id="table_notas-docente">
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
            @php($index = 1)
            @foreach ($estudiantes as $estudiante)
                
            <tr>
                <td>{{ $index ++ }}</td>
                <td>{{ $estudiante->nombre }}</td>
                <td>{{ $estudiante->nota1 }}</td>
                <td>{{ $estudiante->nota2 }}</td>
                <td>{{ $estudiante->nota3 }}</td>
                <td>{{ $estudiante->nota4 }}</td>
                <td>{{ $estudiante->parcial }}</td>
                <td>{{ $estudiante->promedio }}</td>
                <td>
                    <a href="{{ route('nota.edit',$estudiante->nota_id) }}" class="btn btn-outline-primary">Modificar</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <div class="container">
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <p>No hay estudiantes inscritos</p>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
    @endif
</div>
@endsection