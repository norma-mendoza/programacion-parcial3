@extends('layout.app')
@section('title','Nota - calificaciones')
@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center">
        <h1>Informe de notas</h1>
        <a href="{{ route('estudiante.index') }}" class="btn">Regresar</a>
    </div>
    <table class="table table-responsive-sm table-striped" id="table_notas">
        <thead>
            <tr>
                <th>#</th>
                <th>Asignatura</th>
                <th>Nota 1</th>
                <th>Nota 2</th>
                <th>Nota 3</th>
                <th>Nota 4</th>
                <th>Parcial</th>
                <th>Promedio</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>
            @php($index = 1)
            @foreach ($notas as $nota)
                
            <tr>
                <td>{{ $index ++ }}</td>
                <td>{{ $nota->nombreCurso }}</td>
                <td align="end">{{ $nota->nota1 }}</td>
                <td align="end">{{ $nota->nota2 }}</td>
                <td align="end">{{ $nota->nota3 }}</td>
                <td align="end">{{ $nota->nota4 }}</td>
                <td align="end">{{ $nota->parcial }}</td>
                <td align="end">{{ $nota->promedio }}</td>
                <td align="center">
                    @if (6 < $nota->promedio)
                        Aprobado
                    @else
                        Reprobado
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection