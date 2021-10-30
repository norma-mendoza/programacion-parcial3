
@extends('layout.app')
@section('title', 'cursos')

@section('content')

<div class="row">
    <div class="col-md-5 m-auto">
        <div class="card">
        <div class="card-header">
            <h4>Actualizar el curso</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('curso.update',$curso) }}" method="POST">
                @csrf @method('PUT')
                
                <div class="form-group">
                    <input name="nombreCurso" type="text" placeholder="Nombre del curso" class="form-control @error('nombreCurso') is-invalid @enderror" value="{{ old('nombreCurso',$curso->nombreCurso) }}">
                </div>
                <div class="form-group">
                    <input name="year" type="number" min="1" placeholder="Año" class="form-control @error('year') is-invalid @enderror" value="{{ old('year',$curso->year) }}">
                </div>
                <div class="form-group">
                    <input name="ciclo" type="number" min="1" value="{{ old('ciclo',$curso->ciclo) }}" max="2" placeholder="Ciclo" class="form-control @error('ciclo') is-invalid @enderror">
                </div>
                <div class="form-group">
                    <select name="user_id" class="form-control @error('user_id') is-invalid @enderror">
                        <option value="{{$curso->user_id}}">{{ $curso->user->nombre." ".$curso->user->apellido }}</option>
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
</div>
@endsection

