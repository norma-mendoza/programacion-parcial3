@extends('layout.app')
@section('title','Estudiante')
@section('content')
<div class="container">
    <h1>Informe de los estudiantes</h1>

    <div class="d-flex justify-content-between my-3">
        <h3>Materias</h3>
        <a class="btn btn-outline-secondary" href="{{ route('estudiante.show') }}">Ver notas</a>
    </div>
    <table class="table table-responsive-sm table-striped" id="table_id">
        <thead>
            <tr>
                <th>#</th>
                <th>Cursos</th>
                <th>Ciclo</th>
                <th align="end">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cursos as $curso)
            <tr>
                <td>{{ $curso->id }}</td>
                <td>{{ $curso->nombreCurso }}</td>
                <td align="end">{{ $curso->ciclo.'-'.$curso->year }}</td>
               <td align="end">
                   <form action="{{ route('estudiante.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="curso_id" value="{{ $curso->id }}">
                       <button type="submit" class="btn btn-success">Inscribir <i class="fas fa-chalkboard-teacher"></i></button>
                   </form>
                </td>
            </tr>
                
            @endforeach
        </tbody>
    </table>
</div>
@endsection