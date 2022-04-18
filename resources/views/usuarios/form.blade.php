<h1>{{ $modo }} Usuario</h1>

@if(count($errors)>0)

    <div class="alert alert-danger" role="alert">
        <ul>
        @foreach( $errors->all() as $error)
        <li> {{ $error }} </li>
        @endforeach
        </ul>
    </div>

@endif

<div class="form-group">
<label for="Nombre">Nombre</label>
<input type="text" class="form-control" name="Nombre" value="{{  isset($usuarios->Nombre)?$usuarios->Nombre:old('Nombre') }}" id="Nombre">
</div>

<div class="from-group">
<label for="ApellidoPaterno">Apellido Paterno</label>
<input type="text" class="form-control" name="ApellidoPaterno" value="{{ isset($usuarios->ApellidoPaterno)?$usuarios->ApellidoPaterno:old('ApellidoPaterno') }}" id="ApellidoPaterno"> 
</div>

<div class="from-group">    
<label for="Apellido Materno">Apellido Materno</label>
<input type="text" class="form-control" name="ApellidoMaterno" value="{{ isset($usuarios->ApellidoMaterno)?$usuarios->ApellidoMaterno:old('ApellidoMaterno') }}" id="ApellidoMaterno"> 
</div>

<div class="from-group">
<label for="Correo">Correo</label>
<input type="text" class="form-control" name="Correo" value="{{ isset($usuarios->Correo)?$usuarios->Correo:old('Correo') }}" id="Correo"> 
</div>

<div class="from-group">
<label for="Pasword">Contraseña</label>
<input type="text" class="form-control" name="Password" value="{{ isset($usuarios->Password)?$usuarios->Password:'' }}" id="Password"> <br>
</div>


<input type="submit" class="btn btn-primary" value="{{ $modo }}">    
<a class="btn btn-primary" href="{{ url('usuarios/') }}">Regresar</a><br>
