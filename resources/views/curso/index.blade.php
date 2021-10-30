@extends('layout.app')
@section('title', 'cursos')

@section('content')
<div class="container">
    <h1 class="text-center text-dark py-3">Sección de cursos</h1>
    <div class="row">
        <div class="col-12 col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4>Agregar curso</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('curso.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <input name="nombreCurso" type="text" placeholder="Nombre del curso" class="form-control @error('nombreCurso') is-invalid @enderror">
                            
                        </div>
                        <div class="form-group">
                            <input name="year" type="number" min="1" placeholder="Año" class="form-control @error('year') is-invalid @enderror">
                        </div>
                        <div class="form-group">
                            <input name="ciclo" type="number" min="1" max="2" placeholder="Ciclo" class="form-control @error('ciclo') is-invalid @enderror">
                        </div>
                        <div class="form-group">
                            <select name="user_id" class="form-control @error('user_id') is-invalid @enderror">
                                <option value="">Profesores</option>
                                @foreach ($users as $user)
                                <option value="{{ $user->id }}">{{ $user->nombre." ".$user->apellido }}</option>
                                    
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-outline-success">Guardar curso</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <table class="table table-responsive-sm" id="table_curso">
                <thead align="center" class="thead-dark">
                    <tr>
                        <th>#</th>
                        <th>Cursos</th>
                        <th>Ciclo - Año</th>
                        <th>Profesor</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($cursos as $curso)
                        
                    <tr>
                        <td>{{ $curso->id }}</td>
                        <td>{{ $curso->nombreCurso }}</td>
                        <td>{{ $curso->ciclo." - ".$curso->year }}</td>
                        <th>{{ $curso->user->nombre." ".$curso->user->apellido }}</th>
                        <td>
                            <div class="row">
                                <div class="col-md-6">
                                    <a href="{{ route('curso.edit',$curso) }}" class="btn btn-outline-info btn-sm"><i class="far fa-edit"></i></a>
                                    
                                </div>
                                <div class="col-md-6">

                                    <form action="{{ route('curso.destroy',$curso) }}" method="POST">
                                        @csrf @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i></button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @empty
                        
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection