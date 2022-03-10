@extends('layout.app')

@section('content')
<h4>Detalles del alumno: {{$alumno->nombre}}</h4>
<div>
    <a class="btn btn-primary" role="button" href="{{route('lista')}}">Regresar</a>
</div>
<hr>
<div class="row justify-content-center">
    <div class="col-4">
        <label class="text-center">Foto de Pefil:</label><br>
        <img src="{{ Storage::url('public/'.$alumno->foto) }}" height="250" width="auto">
    </div>
    <div class="col-4">
        <label class="text-center">Nombre:</label>
        <input class="form-control" type="text" name="name" value="{{ $alumno->nombre }}" readonly>
        <label class="text-center">Fecha de Nacimiento</label>
        <input class="form-control" type="text" name="app" value="{{ $alumno->fn }}" readonly>
        <label class="text-center">Genero:</label>
        <input class="form-control" type="text" name="apm" value="{{ $alumno->gen }}" readonly>
        <label class="text-center">Matricula: </label>
        <input type="text" class="form-control" value="{{ $alumno->matricula }}" readonly>
    </div>
</div>
<div class="row justify-content-center">
    <div class="col-4">
        <label class="text-center">Correo:</label>
        <input class="form-control" type="text" name="email" value="{{ $alumno->email }}" readonly>
    </div>
    <div class="col-4">
        <label class="text-center">Dirección:</label>
        <input class="form-control" type="text" name="zona" value="{{$alumno->direccion}}" readonly>
    </div>
</div>
@endsection
