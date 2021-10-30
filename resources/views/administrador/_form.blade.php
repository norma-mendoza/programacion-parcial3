<div class="form-group row">
    <label for="nombre" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

    <div class="col-md-6">
        <input id="nombre" type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre" value="{{ old('nombre',$user->nombre) }}" required autocomplete="nombre" autofocus>

        @error('nombre')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="nombre" class="col-md-4 col-form-label text-md-right">{{ __('Apellido') }}</label>

    <div class="col-md-6">
        <input id="nombre" type="text" class="form-control @error('apellido') is-invalid @enderror" name="apellido" value="{{ old('apellido',$user->apellido) }}" required autocomplete="nombre" autofocus>

        @error('apellido')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="fechaNacimiento" class="col-md-4 col-form-label text-md-right">{{ __('F.Nacimiento') }}</label>

    <div class="col-md-6">
        <input id="fechaNacimiento" type="date" class="form-control @error('fechaNacimiento') is-invalid @enderror" name="fechaNacimiento" value="{{ old('fechaNacimiento',$user->fechaNacimiento) }}" required autocomplete="nombre" autofocus>

        @error('fechaNacimiento')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="direccion" class="col-md-4 col-form-label text-md-right">{{ __('Direccion') }}</label>

    <div class="col-md-6">
        <input id="direccion" type="text" class="form-control @error('direccion') is-invalid @enderror" name="direccion" value="{{ old('direccion',$user->direccion) }}" required autocomplete="nombre" autofocus>

        @error('direccion')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="dui" class="col-md-4 col-form-label text-md-right">{{ __('Dui') }}</label>

    <div class="col-md-6">
        <input id="dui" type="text" class="form-control @error('dui') is-invalid @enderror" name="dui" value="{{ old('dui',$user->dui) }}" required autocomplete="nombre" autofocus>

        @error('dui')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="genero" class="col-md-4 col-form-label text-md-right">{{ __('Genero') }}</label>

    <div class="col-md-6">
        <select name="genero" class="form-control">
            @if (!empty($user->genero))
            <option value="{{ $user->genero }}">{{ $user->genero }}</option>
            @else
            <option value="">Genero</option>
            @endif
            <option value="M">Masculino</option>
            <option value="F">Femenino</option>
        </select>

        @error('genero')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="telefono" class="col-md-4 col-form-label text-md-right">{{ __('telefono') }}</label>

    <div class="col-md-6">
        <input id="telefono" type="text" class="form-control @error('telefono') is-invalid @enderror" name="telefono" value="{{ old('telefono',$user->telefono) }}" required autocomplete="nombre" autofocus>

        @error('telefono')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

    <div class="col-md-6">
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email',$user->email) }}" required autocomplete="email">

        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('clave') }}</label>

    <div class="col-md-6">
        <input id="password" type="password" class="form-control @error('clave') is-invalid @enderror" name="password" required autocomplete="new-password">

        @error('clave')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

    <div class="col-md-6">
        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
    </div>
</div>

<div class="form-group row">
    <label for="role_id" class="col-md-4 col-form-label text-md-right">{{ __('Role') }}</label>

    <div class="col-md-6">
        <select name="role_id" class="form-control">
            @if (!empty($user->role->role))
            <option value="{{ $user->role->id }}">{{ $user->role->role }}</option>
            @else
            <option value="">Role</option>
            @endif
            <option value="1">Administrador</option>
            <option value="2">Docente</option>
            <option value="3">Estudiante</option>
        </select>

        @error('role_id')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>