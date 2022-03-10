@extends('layout.app')

@section('content')
<h4>Registro de Nuevo Usuario</h4>
<div>
    <a class="btn btn-primary" role="button" href="{{route('lista')}}">Regresar</a>
</div>
<hr>
<form action="{{route('guardar')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-10">
            <label for="nombre">Nombre Completo: </label>
            <input type="text" name="nombre" class="form-control">
        </div>
    </div>
    <div class="row">
        <div class="col-5">
            <label for="fn">Fecha de Nacimiento: </label>
            <input type="date" name="fn" class="form-control">
        </div>
        <div class="col-5">
            <label for="gen">Genero: </label>
            <input type="text" name="gen" class="form-control">
        </div>
    </div>
    <div class="row">
        <div class="col-3">
            <label for="matricula">Matricula: </label>
            <input type="text" name="matricula" class="form-control">
        </div>
        <div class="col-7">
            <label for="direccion">Dirección: </label>
            <input type="text" name="direccion" class="form-control">
        </div>
    </div>
    <div class="row">
        <div class="col-5">
            <label for="email">Email: </label>
            <input type="text" name="email" class="form-control">
        </div>
        <div class="col-5">
            <label for="pass">Password: </label>
            <input type="password" class="form-control" name="pass">
        </div>
    </div>
    <div class="row">
        <div class="col-5">
            <label for="foto">Foto: </label>
            <input type="file" name="foto" class="form-control">
        </div>
        <div class="col-5">
            <label for="id_grupo">Grupo: </label>
            <select name="id_grupo" class="form-control">
                <option value="0"> -- Selecciona un grupo -- </option>
                <option value="1">IDGS-81</option>
                <option value="2">IDGS-82</option>
                <option value="3">IDGS-83</option>
                <option value="4">IDGS-84</option>
            </select>
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
