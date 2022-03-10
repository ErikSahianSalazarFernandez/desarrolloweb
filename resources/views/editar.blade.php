@extends('layout.app')

@section('content')
<h2>Editar Usuario</h2>
<div>
    <a class="btn btn-primary" role="button" href="{{route('lista')}}">Regresar</a>
</div>
<form action="{{route('salvar', ['id' => $alumno->id]) }}" method="POST" enctype="multipart/form-data">
    {{csrf_field()}} {{method_field('PUT')}}
    <div class="row">
        <div class="col-10">
            <label for="nombre">Nombre Completo: </label>
            <input type="text" name="nombre" class="form-control" value="{{$alumno->nombre}}">
        </div>
    </div>
    <div class="row">
        <div class="col-5">
            <label for="fn">Fecha de Nacimiento: </label>
            <input type="date" name="fn" class="form-control" value="{{$alumno->fn}}">
        </div>
        <div class="col-5">
            <label for="gen">Genero: </label>
            @if($alumno->gen == "Femenino")
            <input type="radio" name="gen" value="Femenino" checked>Femenino
            <input type="radio" name="gen" value="Masculino"> Masculino
            @else
            <input type="radio" name="gen" value="Femenino">Femenino
            <input type="radio" name="gen" value="Masculino" checked> Masculino
            @endif
        </div>
    </div>
    <div class="row">
        <div class="col-3">
            <label for="foto">Foto: </label>
            <input type="file" name="foto1" class="form-control">
            <input type="hidden" name="foto2" value="{{$alumno->foto}}" class="form-control-sm" readonly>
        </div>
        <div class="col-7">
            <label for="direccion">Dirección: </label>
            <input type="text" name="direccion" class="form-control" value="{{$alumno->direccion}}">
        </div>
    </div>
    <div class="row">
        <div class="col-5">
            <label for="id_grupo">Grupo:</label>
            <select name="id_grupo" class="form-control">
                @foreach ($grupos as $grupo)
                @if($alumno->id_grupo == $grupo->id)
                <option value="{{$grupo->id}}">{{$grupo->clave}}</option>
                @endif
                @endforeach
                @foreach ($grupos as $grupo)
                @if($alumno->id_grupo != $grupo->id)
                <option value="{{$grupo->id}}">{{$grupo->clave}}</option>
                @endif
                @endforeach
            </select>
        </div>
        <div class="col-5">
            <label for="matricula">Matricula: </label>
            <input type="text" name="matricula" class="form-control" value="{{ $alumno->matricula }}">
        </div>
    </div>
    <div class="row">
        <div class="col-5">
            <label for="email">Email: </label>
            <input type="text" name="email" class="form-control" value="{{$alumno->email}}">
        </div>
        <div class="col-5">
            <label for="pass">Password: </label>
            <input type="text" class="form-control" name="pass" value="{{$alumno->pass}}">
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-5">
            <input type="submit" class="btn btn-outline-success" value="Guardar Datos">
        </div>
    </div>
</form>
@endsection
